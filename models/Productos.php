<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property int $Id
 * @property string $Producto
 * @property string $Descripcion
 * @property string $id_prove
 * @property string $Existencia
 * @property string $Precio_venta
 * @property string $Autorizado
 * @property string $Iva
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Producto', 'Descripcion', 'id_prove', 'Existencia', 'Precio_venta', 'Autorizado', 'Iva'], 'required'],
            [['Producto'], 'string', 'max' => 50],
            [['Descripcion', 'Precio_venta'], 'string', 'max' => 60],
            [['id_prove', 'Iva'], 'string', 'max' => 20],
            [['Existencia', 'Autorizado'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => Yii::t('app', 'ID'),
            'Producto' => Yii::t('app', 'Producto'),
            'Descripcion' => Yii::t('app', 'Descripcion'),
            'id_prove' => Yii::t('app', 'Id Prove'),
            'Existencia' => Yii::t('app', 'Existencia'),
            'Precio_venta' => Yii::t('app', 'Precio Venta'),
            'Autorizado' => Yii::t('app', 'Autorizado'),
            'Iva' => Yii::t('app', 'Iva'),
        ];
    }
}
