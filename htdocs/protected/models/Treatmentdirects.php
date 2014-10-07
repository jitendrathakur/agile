<?php

/**
 * This is the model class for table "treatmentdirects".
 *
 * The followings are the available columns in table 'treatmentdirects':
 * @property string $id
 * @property string $duration
 * @property string $key_id
 * @property string $treatmentdate
 * @property string $otservice
 * @property string $iepdueon
 * @property integer $gmp_sittingposture
 * @property integer $gmp_standing
 * @property integer $gmp_shoulder
 * @property integer $gmp_trunk
 * @property integer $gmp_rangemotion
 * @property integer $gmp_ndt
 * @property integer $fvm_grasping
 * @property integer $fvm_handstrength
 * @property integer $fvm_coloring
 * @property integer $fvm_scissor
 * @property integer $fvm_bilateral
 * @property integer $fvm_crossing
 * @property integer $sck_feeding
 * @property integer $sck_fastener
 * @property integer $sck_management
 * @property integer $ss_tactile
 * @property integer $ss_visual
 * @property integer $ss_vestibular
 * @property integer $ss_proprioceptive
 * @property integer $ss_motorplanning
 * @property integer $ss_alertprogram
 * @property integer $ss_attention
 * @property string $behavior
 * @property string $comment
 * @property integer $therapist_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property integer $isactive
 */
class Treatmentdirects extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'treatmentdirects';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('key_id, treatmentdate, therapist_id', 'required'),
			array('gmp_sittingposture, gmp_standing, gmp_shoulder, gmp_trunk, gmp_rangemotion, gmp_ndt, fvm_grasping, fvm_handstrength, fvm_coloring, fvm_scissor, fvm_bilateral, fvm_crossing, sck_feeding, sck_fastener, sck_management, ss_tactile, ss_visual, ss_vestibular, ss_proprioceptive, ss_motorplanning, ss_alertprogram, ss_attention, therapist_id, isactive', 'numerical', 'integerOnly'=>true),
			array('duration', 'length', 'max'=>10),
			array('key_id, otservice, iepdueon, behavior', 'length', 'max'=>255),
			array('comment, created_at, updated_at, deleted_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, duration, key_id, treatmentdate, otservice, iepdueon, gmp_sittingposture, gmp_standing, gmp_shoulder, gmp_trunk, gmp_rangemotion, gmp_ndt, fvm_grasping, fvm_handstrength, fvm_coloring, fvm_scissor, fvm_bilateral, fvm_crossing, sck_feeding, sck_fastener, sck_management, ss_tactile, ss_visual, ss_vestibular, ss_proprioceptive, ss_motorplanning, ss_alertprogram, ss_attention, behavior, comment, therapist_id, created_at, updated_at, deleted_at, isactive', 'safe', 'on'=>'search'),
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
			'duration' => 'Duration',
			'key_id' => 'Key',
			'treatmentdate' => 'Treatmentdate',
			'otservice' => 'Otservice',
			'iepdueon' => 'Iepdueon',
			'gmp_sittingposture' => 'Gmp Sittingposture',
			'gmp_standing' => 'Gmp Standing',
			'gmp_shoulder' => 'Gmp Shoulder',
			'gmp_trunk' => 'Gmp Trunk',
			'gmp_rangemotion' => 'Gmp Rangemotion',
			'gmp_ndt' => 'Gmp Ndt',
			'fvm_grasping' => 'Fvm Grasping',
			'fvm_handstrength' => 'Fvm Handstrength',
			'fvm_coloring' => 'Fvm Coloring',
			'fvm_scissor' => 'Fvm Scissor',
			'fvm_bilateral' => 'Fvm Bilateral',
			'fvm_crossing' => 'Fvm Crossing',
			'sck_feeding' => 'Sck Feeding',
			'sck_fastener' => 'Sck Fastener',
			'sck_management' => 'Sck Management',
			'ss_tactile' => 'Ss Tactile',
			'ss_visual' => 'Ss Visual',
			'ss_vestibular' => 'Ss Vestibular',
			'ss_proprioceptive' => 'Ss Proprioceptive',
			'ss_motorplanning' => 'Ss Motorplanning',
			'ss_alertprogram' => 'Ss Alertprogram',
			'ss_attention' => 'Ss Attention',
			'behavior' => 'Behavior',
			'comment' => 'Comment',
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
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('key_id',$this->key_id,true);
		$criteria->compare('treatmentdate',$this->treatmentdate,true);
		$criteria->compare('otservice',$this->otservice,true);
		$criteria->compare('iepdueon',$this->iepdueon,true);
		$criteria->compare('gmp_sittingposture',$this->gmp_sittingposture);
		$criteria->compare('gmp_standing',$this->gmp_standing);
		$criteria->compare('gmp_shoulder',$this->gmp_shoulder);
		$criteria->compare('gmp_trunk',$this->gmp_trunk);
		$criteria->compare('gmp_rangemotion',$this->gmp_rangemotion);
		$criteria->compare('gmp_ndt',$this->gmp_ndt);
		$criteria->compare('fvm_grasping',$this->fvm_grasping);
		$criteria->compare('fvm_handstrength',$this->fvm_handstrength);
		$criteria->compare('fvm_coloring',$this->fvm_coloring);
		$criteria->compare('fvm_scissor',$this->fvm_scissor);
		$criteria->compare('fvm_bilateral',$this->fvm_bilateral);
		$criteria->compare('fvm_crossing',$this->fvm_crossing);
		$criteria->compare('sck_feeding',$this->sck_feeding);
		$criteria->compare('sck_fastener',$this->sck_fastener);
		$criteria->compare('sck_management',$this->sck_management);
		$criteria->compare('ss_tactile',$this->ss_tactile);
		$criteria->compare('ss_visual',$this->ss_visual);
		$criteria->compare('ss_vestibular',$this->ss_vestibular);
		$criteria->compare('ss_proprioceptive',$this->ss_proprioceptive);
		$criteria->compare('ss_motorplanning',$this->ss_motorplanning);
		$criteria->compare('ss_alertprogram',$this->ss_alertprogram);
		$criteria->compare('ss_attention',$this->ss_attention);
		$criteria->compare('behavior',$this->behavior,true);
		$criteria->compare('comment',$this->comment,true);
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
	 * @return Treatmentdirects the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
