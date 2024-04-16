<?php

namespace app\modules\user\models;

use Yii;
use yii\db\Query;// Only used for Fetching
use app\models\Show;

/**
 * This is the model class for table "example".
 *
 * @property int $id
 * @property string|null $name
 */
class Example extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'example';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }


    /////////// Query Builder ///////////
    public static function  getTests(){
        //// ----  Insert ----///
//        $sql = Yii::$app->db->createCommand()->insert('example',
//        [
//            'name' => 'Test 1'
//        ])->execute(); // Method of to insert in table.
//        $lastId = Yii::$app->db->getLastInsertID(); // Will fetch last inserted id
//        echo $lastId;


//        //// ----  Update ----///
//    $sql = Yii::$app->db->createCommand()->update('example',
//    [
//                'name' => 'Yash 2',
//             ],array('id'=>2))->execute(); // Method of to Update in table.

        //// ----  Delete ----///
//    $sql = Yii::$app->db->createCommand()->delete('example',array('id'=>2))->execute(); // Method of to delete in table.


        //// ---- Select ----///
    $query = (new Query())
    ->select('example.*')
    ->from('example')
//    ->where([
//        'name' => 'Yash'
//    ])
    ->all();
    return $query;
//    print_r( $query);


        //// ---- Joins ----///
//    $query = (new Query())
//    ->select('example.*, show.Showcol')
//    ->from('example')
//    ->innerJoin('show', 'show.idShow = example.id')
////    ->where([
////        'name' => 'Yash'
////    ])
///     ->andWhere/orWhere/andfilterWhere
///     ->groupBy(name or[name, email])
///     ->having('id>1')
///     ->orderBy('id')
///     ->limit('10')
//    ->all();
//    echo "<pre>"; print_r($query); echo "</pre>";
//    return ;
    }
}
