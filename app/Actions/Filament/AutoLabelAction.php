<?php

declare(strict_types=1);

namespace Modules\Lang\Actions\Filament;

<<<<<<< HEAD
<<<<<<< HEAD
use ReflectionClass;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Filament\Actions\Action;
use Webmozart\Assert\Assert;
use Filament\Tables\Columns\Column;
use Filament\Forms\Components\Field;
use Filament\Tables\Filters\BaseFilter;
use Modules\Lang\Actions\SaveTransAction;
use Filament\Forms\Components\Wizard\Step;
use Modules\Xot\Actions\GetTransKeyAction;
use Spatie\QueueableAction\QueueableAction;
use Filament\Tables\Actions\Action as TableAction;
use Filament\Forms\Components\Section as FormsSection;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Illuminate\Support\HtmlString;
=======
=======
>>>>>>> c010b2b8 (.)
use Filament\Actions\Action;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Wizard\Step;
use Filament\Tables\Actions\Action as TableAction;
use Filament\Tables\Columns\Column;
use Filament\Tables\Filters\BaseFilter;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\GetTransKeyAction;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)

class AutoLabelAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     * return number of input added.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Field|BaseFilter|Column|Step|Action|TableAction|FormsSection $component
     *
     * @return Field|BaseFilter|Column|Step|Action|TableAction|FormsSection
     */
<<<<<<< HEAD
    public function execute() {
=======
    public function execute($component) {
>>>>>>> e3b7fe2 (.)
        $backtrace = debug_backtrace();
        $backtrace_slice = array_slice($backtrace, 2);
        $class = Arr::first($backtrace_slice, function ($item) use($component){
            if($item['function'] == 'execute'){
                return false;
            }
            
           if(isset($item['object']) && Str::startsWith($item['object']::class, 'Modules\\') && $item['object'] != $component  ){
              return true;
            }

            if(isset($item['class']) && Str::startsWith($item['class'], 'Modules\\') ){
                $reflection_class = new ReflectionClass($item['class'] );
                if (!$reflection_class->isAbstract()) {
                    return true;
                }
                
            }
            return false;
        });
       
        if (is_array($class)) {
            $object_class = null;
            if(isset($class['object'])){
                $object_class = $class['object']::class;
            }
            if(isset($class['class']) && $object_class == null){
                $object_class = $class['class'];
            }
            if(is_null($object_class)){
                throw new \Exception('No object class found');
            }
=======
=======
>>>>>>> c010b2b8 (.)
     * @param Field|BaseFilter|Column|Step|Action|TableAction $component
     *
     * @return Field|BaseFilter|Column|Step|Action|TableAction
     */
    public function execute($component)
    {
        $backtrace = debug_backtrace();
        $backtrace_slice = array_slice($backtrace, 2);
        $class = Arr::first($backtrace_slice, function ($item) {
            if (! isset($item['object'])) {
                return false;
            }

            return Str::startsWith($item['object']::class, 'Modules\\');
            // return Str::startsWith($item['class'],'Modules\\');
        });
        if (is_array($class) && isset($class['object'])) {
            $object_class = $class['object']::class;

            // Assert::string($class = Arr::get($backtrace, '5.class'));
<<<<<<< HEAD
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
            $trans_key = app(GetTransKeyAction::class)->execute($object_class);
        } else {
            $trans_key = 'lang::txt';
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $label_tkey = null;
        $val = 'no-set-val';
        
        if ($component instanceof Step) {
            Assert::string($val = $component->getLabel());
            $label_tkey = $trans_key.'.steps.'.$val.'';
        } 
        if($label_tkey == null && $component instanceof FormsSection){
           
            $val = $component->getHeading();
            if($val==null){
                $val='empty';
            }
            if(!is_string($val)){
                $val=app(SafeStringCastAction::class)->execute($val);
            }
            $label_tkey = $trans_key.'.sections.'.$val.'';
            
        }
        if($label_tkey == null && method_exists($component,'getName')){
=======
=======
>>>>>>> c010b2b8 (.)
        if ($component instanceof Step) {
            Assert::string($val = $component->getLabel());
            $label_tkey = $trans_key.'.steps.'.$val.'';
        } else {
<<<<<<< HEAD
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
            Assert::string($val = $component->getName());
            $label_tkey = $trans_key.'.fields.'.$val.'';
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if ($component instanceof Action ) {
            Assert::string($val = $component->getName());
            $label_tkey = $trans_key.'.actions.'.$val.'';
        }
        
        /*
        $component_parent=get_parent_class($component);
        if(in_array($component_parent,['Filament\Forms\Components\Component'])){
            $component_key=Str::of(class_basename($component))->plural()->snake()->toString();
        }else{
            $component_key=Str::of(class_basename($component_parent))->plural()->snake()->toString();
        }
        
        
        $val=null;
        if(method_exists($component,'getLabel')){
            $val=$component->getLabel();
        }
        if(method_exists($component,'getHeading')){
            $val=$component->getHeading();
        }
        if(method_exists($component,'getName')){
            $val=$component->getName();
        }

        if(!in_array($component_key,['steps','fields'])){
            dddx([
                'message'=>'preso',
                'component'=>$component,
                'parent'=>get_parent_class($component),
                'component_key'=>$component_key,
            ]);
        }

        $label_tkey = $trans_key.'.'.$component_key.'.'.$val.'';
    
        */

        

        $label_key = $label_tkey.'.'.Str::snake($type);

        if(Str::startsWith($label_key,'media::attachments_schema')){
            dddx([
                'message'=>'preso',
                'label_key'=>$label_key,
                'label_tkey'=>$label_tkey,
                //'val'=>$val,
                'type'=>$type,
                'component'=>$component,
                'class'=>$class,
                'backtrace'=>$backtrace,
            ]);
        }

        $label = trans($label_key);
        if (is_string($label) && $label_key == $label) { //se non esiste la traduzione, la salvo
            
            app(SaveTransAction::class)->execute($label_key, $val);
        }
        if (is_string($label) && $label_key != $label) { //se esiste la traduzione, la aggiorno
            if (method_exists($component, $type)) {
                if(strip_tags($label) != $label && in_array($type,['helperText'])){
                    $component->{$type}(new HtmlString($label));
                }else{
                    $component->{$type}($label);
                }
            }
            
            //if (method_exists($component, 'tooltip')) {
            //    $component->tooltip($label);
            //}
        }
        if (!is_string($label)) {
=======
=======
>>>>>>> c010b2b8 (.)
        if ($component instanceof Action) {
            $label_tkey = $trans_key.'.actions.'.$val.'';
        }

        $label_key = $label_tkey.'.label';

        $label = trans($label_key);
        if (is_string($label)) {
            if ($label_key == $label) {
                $label_value = $val;
                $label_key1 = $label_tkey;
                $label1 = trans($label_key1);
                if ($label_key1 != $label1) {
                    $label_value = $label1;
                }

                app(SaveTransAction::class)->execute($label_key, $label_value);
            }
            $component->label($label);
            if (method_exists($component, 'tooltip')) {
                $component->tooltip($label);
            }
        } else {
<<<<<<< HEAD
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
            $component->label('FIX:'.$label_key);
        }

        return $component;
    }
}
