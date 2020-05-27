<?php

namespace common\models;

use Yii;
use common\models\base\BaseModel;
use common\widgets\post\PostWidget;
/**
 * This is the model class for table "post".
 *
 * @property int $p_id
 * @property string $title
 * @property string|null $content
 * @property int|null $user_id
 * @property string|null $tabs
 * @property string|null $p_time
 *
 * @property Comment[] $comments
 * @property User $user
 */
class PostModel extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['user_id'], 'integer'],
            [['p_time'], 'safe'],
            [['title', 'tags'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'p_id' => 'P ID',
            'title' => 'Title',
            'content' => 'Content',
            'user_id' => 'User ID',
            'tags' => 'Tags',
            'p_time' => 'P Time',
        ];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['p_id' => 'p_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }


    public static function getPages($query,$curpage=1,$pageSize=10){
        $data['count']=$query->count();
        
//超过实际页数时，不取curpage为当前页
        $curpage=(ceil($data['count']/$pageSize)<$curpage)?ceil($data['count']/$pageSize):$curpage;
//当前页
        $data['curpage']=$curpage;
//每页显示的条数
        $data['pageSize']=$pageSize;
        //起始页
        $data['start']=($curpage-1)*$pageSize+1;
        //最后一页
        $data['end']=(ceil($data['count']/$pageSize)==$curpage)?$data['count']:($curpage-1)*$pageSize+$pageSize;
        //数据
        $data['data']=$query->offset(($curpage-1)*$pageSize)->limit($pageSize)->asArray()->all();
        if(empty($data['data'])){
            return ['count'=>0,'curpage'=>$curpage,'end'=>0,'data'=>[]];
        }
        return $data;


    }









}
