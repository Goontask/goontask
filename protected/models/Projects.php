<?php

/**
 * This is the model class for table "projects".
 *
 * The followings are the available columns in table 'projects':
 * @property string $id
 * @property string $name
 * @property string $description
 * @property integer $created_by
 * @property string $start
 * @property string $deadline
 * @property string $private_or_public
 * @property string $status
 * @property string $members
 * @property string $logo
 * @property string $files
 */
class Projects extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'projects';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, created_by, start, private_or_public, members, logo, files', 'required'),
			array('created_by', 'numerical', 'integerOnly'=>true),
			array('name, logo, files', 'length', 'max'=>255),
			array('private_or_public, status', 'length', 'max'=>1),
			array('members', 'length', 'max'=>400),
			array('deadline', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, description, created_by, start, deadline, private_or_public, status, members, logo, files', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'description' => 'Description',
			'created_by' => 'Created By',
			'start' => 'Start',
			'deadline' => 'Deadline',
			'private_or_public' => 'Private Or Public',
			'status' => 'Status',
			'members' => 'Members',
			'logo' => 'Logo',
			'files' => 'Files',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('start',$this->start,true);
		$criteria->compare('deadline',$this->deadline,true);
		$criteria->compare('private_or_public',$this->private_or_public,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('members',$this->members,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('files',$this->files,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Projects the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
