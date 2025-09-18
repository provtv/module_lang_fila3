<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Xot\Contracts;

use Filament\Models\Contracts\FilamentUser;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Passport\Token;
use Modules\User\Contracts\HasTeamsContract;
use Spatie\Permission\Contracts\Role;

// use Filament\Models\Contracts\HasTenants;

/**
 * Modules\User\Contracts\UserContract.
 *
 * @property ProfileContract|null                                                       $profile
 * @property string $id
 * @property string $handle
 * @property string|null                                                                $first_name
 * @property string|null                                                                $last_name
 * @property string|null                                                                $full_name
 * @property string|null                                                                $password
 * @property string|int|null                                                            $current_team_id
 * @property string|null                                                                $phone
 * @property string|null                                                                $email
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role>   $roles
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Tenant> $tenants
 *
 * @method bool canAccessSocialite()
 *
 * @phpstan-require-extends Model
 *
 * @mixin \Eloquent
 */
interface UserContract extends Authenticatable, Authorizable, CanResetPassword, FilamentUser, HasTeamsContract, ModelContract, MustVerifyEmail, PassportHasApiTokensContract
{
    /*
    public function isSuperAdmin();
    public function name();
    public function areas();
    public function avatar();
    */
    public function profile(): HasOne;

    /**
     * Update the model in the database.
     *
     * @return bool
     */
    /**
     * Get a relationship.
     *
     * @param string $key
     *
     * @return mixed|null
     */
    public function getRelationValue($key);

    /**
     * Create a new instance of the given model.
     *
     * @param array $attributes
     * @param bool  $exists
     *
     * @return static
     */
    public function newInstance($attributes = [], $exists = false);

    /**
     * Get the value of the model's primary key.
     *
     * @return mixed|int|string
     */
    public function getKey();

    /**
     * Determine if the model has (one of) the given role(s).
     */
    public function hasRole(string|int|array|Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;

    /**
     * Assign the given role to the model.
     *
     * @return $this
     */
    public function assignRole(array|string|int|Role|\Illuminate\Support\Collection $roles = []);

    /**
     * Revoke the given role from the model.
     *
     * @param string|int|Role|\BackedEnum $role
     *
     * @return self
     */
    public function removeRole($role);
    /**
     * Get the current access token being used by the user.
     *
     * @return Token|\Laravel\Passport\TransientToken|null
     */
    // public function token();

    /**
     * A model may have multiple roles.
=======
namespace Modules\User\Contracts;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Collection;

interface UserContract extends Authenticatable
{
    /**
     * Get the primary key for the model.
     */
    public function getKey(): mixed;

    /**
     * Get the current team of the user's context.
     */
    public function currentTeam(): BelongsTo;

    /**
     * Get all of the teams the user belongs to.
     */
    public function teams(): BelongsToMany;

    /**
     * Determine if the user owns the given team.
     */
    public function ownsTeam(TeamContract $team): bool;

    /**
     * Determine if the user belongs to the given team.
     */
    public function belongsToTeam(TeamContract $team): bool;

    /**
     * Get the user's permissions for the given team.
     *
     * @return array<string>
     */
    public function teamPermissions(TeamContract $team): array;

    /**
     * Determine if the user has the given permission on the given team.
     */
    public function hasTeamPermission(TeamContract $team, string $permission): bool;

    /**
     * Get the two factor authentication recovery codes for the user.
     *
     * @return array<int, string>
     */
    public function recoveryCodes(): array;

    /**
     * Replace the given recovery code with a new one in the user's stored codes.
     */
    public function replaceRecoveryCode(string $code): void;

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     */
    public function getJWTIdentifier(): mixed;

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array<string, mixed>
     */
    public function getJWTCustomClaims(): array;

    /**
     * Get the user's roles.
>>>>>>> 0bcedf94 (Squashed 'laravel/Modules/User/' content from commit 947e4724)
     */
    public function roles(): BelongsToMany;

    /**
<<<<<<< HEAD
     * Get all of the tenants the user belongs to.
     */
    public function tenants(): BelongsToMany;

    // public function canAccessSocialite(): bool;
=======
     * Determine if the user has the given role.
     *
     * @param string|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles
     */
    public function hasRole($roles, ?string $guard = null): bool;

    /**
     * Get the user's authentication logs.
     */
    public function authentications(): BelongsToMany;

    /**
     * Get the user's socialite accounts.
     */
    public function socialiteUsers(): BelongsToMany;

    /**
     * Get the user's owned teams.
     */
    public function ownedTeams(): BelongsToMany;

    /**
     * Get the user's personal team.
     */
    public function personalTeam(): ?TeamContract;

    /**
     * Switch the user's context to the given team.
     */
    public function switchTeam(TeamContract $team): bool;

    /**
     * Get all of the teams the user owns or belongs to.
     */
    public function allTeams(): Collection;
>>>>>>> 0bcedf94 (Squashed 'laravel/Modules/User/' content from commit 947e4724)
}
