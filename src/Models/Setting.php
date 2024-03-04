<?php
/**
 * Playground
 */
namespace Playground\Admin\Models;

use Playground\Models\Model;

/**
 * \Playground\Admin\Models\Setting
 */
class Setting extends Model
{
    protected $table = 'admin_settings';

    /**
     * The default values for attributes.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
        'created_by_id' => null,
        'modified_by_id' => null,
        'owned_by_id' => null,
        'parent_id' => null,
        'setting_type' => null,
        'setting_group' => null,
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null,
        'resolved_at' => null,
        'suspended_at' => null,
        'gids' => 0,
        'po' => 0,
        'pg' => 0,
        'pw' => 0,
        'status' => 0,
        'rank' => 0,
        'size' => 0,
        'active' => true,
        'encrypted' => false,
        'flagged' => false,
        'internal' => false,
        'locked' => false,
        'problem' => false,
        'secure' => false,
        'suspended' => false,
        'unknown' => false,
        'label' => '',
        'title' => '',
        'byline' => '',
        'slug' => null,
        'url' => '',
        'description' => '',
        'introduction' => '',
        'content' => null,
        'summary' => null,
        'icon' => '',
        'image' => '',
        'avatar' => '',
        'ui' => '{}',
        'assets' => '{}',
        'meta' => '{}',
        'notes' => '[]',
        'options' => '{}',
        'setting' => '{}',
        'sources' => '{}',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'resolved_at' => 'datetime',
        'suspended_at' => 'datetime',
        'gids' => 'integer',
        'po' => 'integer',
        'pg' => 'integer',
        'pw' => 'integer',
        'status' => 'integer',
        'rank' => 'integer',
        'size' => 'integer',
        'active' => 'boolean',
        'encrypted' => 'boolean',
        'flagged' => 'boolean',
        'internal' => 'boolean',
        'locked' => 'boolean',
        'problem' => 'boolean',
        'secure' => 'boolean',
        'suspended' => 'boolean',
        'unknown' => 'boolean',
        'label' => 'string',
        'title' => 'string',
        'byline' => 'string',
        'slug' => 'string',
        'url' => 'string',
        'description' => 'string',
        'introduction' => 'string',
        'content' => 'string',
        'summary' => 'string',
        'icon' => 'string',
        'image' => 'string',
        'avatar' => 'string',
        'ui' => 'array',
        'assets' => 'array',
        'meta' => 'array',
        'notes' => 'array',
        'options' => 'array',
        'setting' => 'array',
        'sources' => 'array',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'owned_by_id',
        'parent_id',
        'setting_type',
        'setting_group',
        'resolved_at',
        'suspended_at',
        'gids',
        'po',
        'pg',
        'pw',
        'status',
        'rank',
        'size',
        'active',
        'encrypted',
        'flagged',
        'internal',
        'locked',
        'problem',
        'secure',
        'suspended',
        'unknown',
        'label',
        'title',
        'byline',
        'slug',
        'url',
        'description',
        'introduction',
        'content',
        'summary',
        'icon',
        'image',
        'avatar',
        'ui',
        'assets',
        'meta',
        'options',
        'setting',
        'sources',
    ];
}
