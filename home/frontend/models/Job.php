<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "job".
 *
 * @property integer $id
 * @property string $name
 * @property string $zym
 * @property string $img_one
 * @property string $img_two
 * @property string $img_three
 * @property string $content_one
 * @property string $content_two
 * @property string $content_three
 * @property string $link_one
 * @property string $link_two
 * @property string $js_one
 * @property string $js_two
 * @property string $js_three
 * @property string $js_fore
 * @property integer $mark_one
 * @property integer $mark_two
 * @property integer $mark_three
 * @property integer $mark_fore
 * @property string $web_one
 * @property string $web_two
 * @property string $web_three
 * @property string $content_i
 * @property string $content_m
 * @property string $content_g
 */
class Job extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'job';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'mark_one', 'mark_two', 'mark_three', 'mark_fore'], 'integer'],
            [['name', 'zym', 'img_one', 'img_two', 'img_three', 'web_one', 'web_two', 'web_three', 'content_i', 'content_m', 'content_g'], 'string', 'max' => 32],
            [['content_one', 'content_two', 'content_three', 'link_one', 'link_two', 'js_one', 'js_two', 'js_three', 'js_fore'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'zym' => 'Zym',
            'img_one' => 'Img One',
            'img_two' => 'Img Two',
            'img_three' => 'Img Three',
            'content_one' => 'Content One',
            'content_two' => 'Content Two',
            'content_three' => 'Content Three',
            'link_one' => 'Link One',
            'link_two' => 'Link Two',
            'js_one' => 'Js One',
            'js_two' => 'Js Two',
            'js_three' => 'Js Three',
            'js_fore' => 'Js Fore',
            'mark_one' => 'Mark One',
            'mark_two' => 'Mark Two',
            'mark_three' => 'Mark Three',
            'mark_fore' => 'Mark Fore',
            'web_one' => 'Web One',
            'web_two' => 'Web Two',
            'web_three' => 'Web Three',
            'content_i' => 'Content I',
            'content_m' => 'Content M',
            'content_g' => 'Content G',
        ];
    }
}
