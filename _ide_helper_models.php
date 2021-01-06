<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Asets
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $name
 * @property string|null $nomor
 * @property string|null $detail
 * @property int|null $kategori_id
 * @property string|null $tgl_beli
 * @property int $tahun
 * @property string|null $lokasi_simpan
 * @property int|null $pic_id
 * @property bool|null $dipinjam
 * @property int|null $peminjam_id
 * @property-read Asets $AsetsKategori
 * @property-read mixed $kategori
 * @property-read mixed $pic_name
 * @method static \Illuminate\Database\Eloquent\Builder|Asets newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Asets newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Asets query()
 * @method static \Illuminate\Database\Eloquent\Builder|Asets whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asets whereDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asets whereDipinjam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asets whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asets whereKategoriId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asets whereLokasiSimpan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asets whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asets whereNomor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asets wherePeminjamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asets wherePicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asets whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asets whereTglBeli($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asets whereUpdatedAt($value)
 */
	class Asets extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AsetsKategori
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property-read AsetsKategori|null $Asets
 * @method static \Illuminate\Database\Eloquent\Builder|AsetsKategori newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AsetsKategori newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AsetsKategori query()
 * @method static \Illuminate\Database\Eloquent\Builder|AsetsKategori whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AsetsKategori whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AsetsKategori whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AsetsKategori whereUpdatedAt($value)
 */
	class AsetsKategori extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $nip
 * @property int $role
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

