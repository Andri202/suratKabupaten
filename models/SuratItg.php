<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surat_itg".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $jenisKelamin
 * @property string $tempatLahir
 * @property string $tanggalLahir
 * @property string $agama
 * @property string $kewarganegaraan
 * @property string $pekerjaan
 * @property string $alamat
 * @property string $tempatKerja
 */
class SuratItg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'surat_itg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'jenisKelamin', 'tempatLahir', 'tanggalLahir', 'agama', 'kewarganegaraan', 'pekerjaan', 'alamat', 'tempatKerja'], 'required'],
            [['jenisKelamin'], 'integer'],
            [['tanggalLahir'], 'safe'],
            [['nama', 'tempatLahir', 'agama', 'kewarganegaraan', 'pekerjaan', 'alamat', 'tempatKerja'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'jenisKelamin' => 'Jenis Kelamin',
            'tempatLahir' => 'Tempat Lahir',
            'tanggalLahir' => 'Tanggal Lahir',
            'agama' => 'Agama',
            'kewarganegaraan' => 'Kewarganegaraan',
            'pekerjaan' => 'Pekerjaan',
            'alamat' => 'Alamat',
            'tempatKerja' => 'Tempat Kerja',
        ];
    }
}
