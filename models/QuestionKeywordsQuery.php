<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[QuestionKeywords]].
 *
 * @see QuestionKeywords
 */
class QuestionKeywordsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return QuestionKeywords[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return QuestionKeywords|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}