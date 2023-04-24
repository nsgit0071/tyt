<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "admin_site".
 *
 * @property int $id
 * @property string $logo
 * @property string $imgf
 * @property string $imgs
 * @property string $imgt
 * @property string $hero_h1
 * @property string $hero_h2
 * @property string $about_n
 * @property string $about_t
 * @property string $news_n
 * @property string $news_t
 * @property string $books_n
 * @property string $books_t
 * @property string $counts_n
 * @property string $team_n
 * @property string $team_t
 * @property string $contact_n
 * @property string $contact_t
 * @property string $map_link
 * @property string $location
 * @property string $email
 * @property int $tel
 * @property string $status
 * @property string $telegram_link
 * @property string $facebook_link
 * @property string $instagram_link
 * @property string $youtube_link
 */
class AdminSite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin_site';
    }

    /**
     * {@inheritdoc}
     */
    public $file;
    public function rules()
    {
        return [
            [['logo', 'imgf', 'imgs', 'imgt', 'hero_h1', 'hero_h2', 'about_n', 'about_t', 'news_n', 'news_t', 'books_n', 'books_t', 'counts_n', 'team_n', 'team_t', 'contact_n', 'contact_t', 'map_link', 'location', 'email', 'tel', 'status', 'telegram_link', 'facebook_link', 'instagram_link', 'youtube_link'], 'required'],
            [['tel'], 'integer'],
            [['status'], 'string'],
            [['logo', 'imgf', 'imgs', 'imgt', 'counts_n', 'telegram_link', 'facebook_link', 'instagram_link'], 'string', 'max' => 200],
            [['hero_h1', 'hero_h2', 'about_n', 'about_t', 'news_n', 'news_t', 'books_n', 'books_t', 'team_n', 'team_t', 'contact_n', 'contact_t', 'location', 'email'], 'string', 'max' => 32],
            [['map_link', 'youtube_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logo' => 'Logo',
            'imgf' => 'Imgf',
            'imgs' => 'Imgs',
            'imgt' => 'Imgt',
            'hero_h1' => 'Hero H1',
            'hero_h2' => 'Hero H2',
            'about_n' => 'About N',
            'about_t' => 'About T',
            'news_n' => 'News N',
            'news_t' => 'News T',
            'books_n' => 'Books N',
            'books_t' => 'Books T',
            'counts_n' => 'Counts N',
            'team_n' => 'Team N',
            'team_t' => 'Team T',
            'contact_n' => 'Contact N',
            'contact_t' => 'Contact T',
            'map_link' => 'Footer Haqida',
            'location' => 'Location',
            'email' => 'Email',
            'tel' => 'Tel',
            'status' => 'Status',
            'telegram_link' => 'Telegram Link',
            'facebook_link' => 'Facebook Link',
            'instagram_link' => 'Instagram Link',
            'youtube_link' => 'Youtube Link',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\AdminSiteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AdminSiteQuery(get_called_class());
    }
    public function getImageUrl(){
        return Yii::$app->params['backendUrl'].'uploads/'.$this->logo;
    }
    public function getImageUrlF(){
        return Yii::$app->params['backendUrl'].'uploads/'.$this->imgf;
    }
    public function getImageUrlS(){
        return Yii::$app->params['backendUrl'].'uploads/'.$this->imgs;
    }
    public function getImageUrlT(){
        return Yii::$app->params['backendUrl'].'uploads/'.$this->imgt;
    }

}
