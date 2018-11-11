<?php

namespace gscms\News\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the package.
     *
     * @var array
     */
    protected $policies = [
        // Bind News policy
        'gscms\News\Models\News' => \gscms\News\Policies\NewsPolicy::class,
// Bind Category policy
        'gscms\News\Models\Category' => \gscms\News\Policies\CategoryPolicy::class,
// Bind Comment policy
        'gscms\News\Models\Comment' => \gscms\News\Policies\CommentPolicy::class,
// Bind Tag policy
        'gscms\News\Models\Tag' => \gscms\News\Policies\TagPolicy::class,
    ];

    /**
     * Register any package authentication / authorization services.
     *
     * @param \Illuminate\Contracts\Auth\Access\Gate $gate
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);
    }
}
