<?php

/**
 * This is the model class for table "billingreports".
 *
 * The followings are the available columns in table 'billingreports':
 * @property string $id
 * @property string $typeofservice
 * @property string $servicedate
 * @property string $hours
 * @property string $charge
 * @property string $subtotal
 * @property integer $isactive
 * @property integer $ispaid
 * @property string $billto_districtname
 * @property string $billto_attn
 * @property string $billto_address
 * @property string $billto_city
 * @property string $billto_state
 * @property string $billto_zipcode
 * @property string $nbcot
 * @property string $ein
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property integer $user_id
 */
class Billingreports extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'billingreports';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('typeofservice, billto_districtname, billto_attn, billto_address, billto_city, billto_state, billto_zipcode, nbcot, ein, user_id', 'required'),
			array('isactive, ispaid, user_id', 'numerical', 'integerOnly'=>true),
			array('typeofservice, billto_districtname, billto_attn, billto_address, billto_city, billto_state, billto_zipcode, nbcot, ein', 'length', 'max'=>255),
			array('hours, charge, subtotal', 'length', 'max'=>10),
			array('servicedate, created_at, updated_at, deleted_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, typeofservice, servicedate, hours, charge, subtotal, isactive, ispaid, billto_districtname, billto_attn, billto_address, billto_city, billto_state, billto_zipcode, nbcot, ein, created_at, updated_at, deleted_at, user_id', 'safe', 'on'=>'search'),
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
			'typeofservice' => 'Typeofservice',
			'servicedate' => 'Servicedate',
			'hours' => 'Hours',
			'charge' => 'Charge',
			'subtotal' => 'Subtotal',
			'isactive' => 'Isactive',
			'ispaid' => 'Ispaid',
			'billto_districtname' => 'Billto Districtname',
			'billto_attn' => 'Billto Attn',
			'billto_address' => 'Billto Address',
			'billto_city' => 'Billto City',
			'billto_state' => 'Billto State',
			'billto_zipcode' => 'Billto Zipcode',
			'nbcot' => 'Nbcot',
			'ein' => 'Ein',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'deleted_at' => 'Deleted At',
			'user_id' => 'User',
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
		$criteria->compare('typeofservice',$this->typeofservice,true);
		$criteria->compare('servicedate',$this->servicedate,true);
		$criteria->compare('hours',$this->hours,true);
		$criteria->compare('charge',$this->charge,true);
		$criteria->compare('subtotal',$this->subtotal,true);
		$criteria->compare('isactive',$this->isactive);
		$criteria->compare('ispaid',$this->ispaid);
		$criteria->compare('billto_districtname',$this->billto_districtname,true);
		$criteria->compare('billto_attn',$this->billto_attn,true);
		$criteria->compare('billto_address',$this->billto_address,true);
		$criteria->compare('billto_city',$this->billto_city,true);
		$criteria->compare('billto_state',$this->billto_state,true);
		$criteria->compare('billto_zipcode',$this->billto_zipcode,true);
		$criteria->compare('nbcot',$this->nbcot,true);
		$criteria->compare('ein',$this->ein,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('deleted_at',$this->deleted_at,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Billingreports the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
