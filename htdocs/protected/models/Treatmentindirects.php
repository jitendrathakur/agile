<?php

/**
 * This is the model class for table "treatmentindirects".
 *
 * The followings are the available columns in table 'treatmentindirects':
 * @property string $id
 * @property string $travel_duration
 * @property string $setup_duration
 * @property string $treatmentdate
 * @property string $documentation_duration
 * @property string $other_duration
 * @property integer $therapist_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property integer $isactive
 */
class Treatmentindirects extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'treatmentindirects';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('treatmentdate, therapist_id', 'required'),
			array('therapist_id, isactive', 'numerical', 'integerOnly'=>true),
			array('travel_duration, setup_duration, documentation_duration, other_duration', 'length', 'max'=>10),
			array('created_at, updated_at, deleted_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, travel_duration, setup_duration, treatmentdate, documentation_duration, other_duration, therapist_id, created_at, updated_at, deleted_at, isactive', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'travel_duration' => 'Travel Duration',
			'setup_duration' => 'Setup Duration',
			'treatmentdate' => 'Treatmentdate',
			'documentation_duration' => 'Documentation Duration',
			'other_duration' => 'Other Duration',
			'therapist_id' => 'Therapist',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'deleted_at' => 'Deleted At',
			'isactive' => 'Isactive',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('travel_duration',$this->travel_duration,true);
		$criteria->compare('setup_duration',$this->setup_duration,true);
		$criteria->compare('treatmentdate',$this->treatmentdate,true);
		$criteria->compare('documentation_duration',$this->documentation_duration,true);
		$criteria->compare('other_duration',$this->other_duration,true);
		$criteria->compare('therapist_id',$this->therapist_id);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('deleted_at',$this->deleted_at,true);
		$criteria->compare('isactive',$this->isactive);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Treatmentindirects the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
