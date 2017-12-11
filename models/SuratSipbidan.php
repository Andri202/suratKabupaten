<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surat_sipbidan".
 *
 * @property integer $id
 * @property string $nama
 * @property string $tempatLahir
 * @property string $tanggalLahir
 * @property string $alamat_rumah
 * @property string $alamat_praktik
 * @property string $noSib
 * @property string $noStr
 * @property string $maxBerlaku
 */
class SuratSipbidan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'surat_sipbidan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nama', 'tempatLahir', 'tanggalLahir', 'alamat_rumah', 'alamat_praktik', 'noSib', 'noStr', 'maxBerlaku'], 'required'],
            [['id'], 'integer'],
            [['tanggalLahir', 'maxBerlaku'], 'safe'],
            [['nama', 'tempatLahir', 'alamat_rumah', 'alamat_praktik', 'noSib', 'noStr'], 'string', 'max' => 255],
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
            'tempatLahir' => 'Tempat Lahir',
            'tanggalLahir' => 'Tanggal Lahir',
            'alamat_rumah' => 'Alamat Rumah',
            'alamat_praktik' => 'Alamat Praktik',
            'noSib' => 'No Sib',
            'noStr' => 'No Str',
            'maxBerlaku' => 'Max Berlaku',
        ];
    }
}
