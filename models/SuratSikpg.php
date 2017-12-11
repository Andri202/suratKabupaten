<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surat_sikpg".
 *
 * @property integer $id
 * @property string $nama
 * @property string $tempatLahir
 * @property string $tanggalLahir
 * @property string $tempatGigi
 * @property string $noSipg
 * @property string $noStrpg
 * @property string $maxBerlaku
 */
class SuratSikpg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'surat_sikpg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'tempatLahir', 'tanggalLahir', 'tempatGigi', 'noSipg', 'noStrpg', 'maxBerlaku'], 'required'],
            [['tanggalLahir', 'maxBerlaku'], 'safe'],
            [['nama', 'tempatLahir', 'tempatGigi', 'noSipg', 'noStrpg'], 'string', 'max' => 255],
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
            'tempatGigi' => 'Tempat Gigi',
            'noSipg' => 'No Sipg',
            'noStrpg' => 'No Strpg',
            'maxBerlaku' => 'Max Berlaku',
        ];
    }
}
