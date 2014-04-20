<?php

/**
 * This is the model class for table "tasks".
 *
 * The followings are the available columns in table 'tasks':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $start_date
 * @property string $end_date
 * @property string $checklist
 * @property string $status
 * @property integer $project
 * @property integer $created_by
 * @property integer $responsible
 * @property string $members
 * @property string $hours
 * @property string $docs
 */
class tasks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tasks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, name, project, responsible', 'required'),
			array('id, project, created_by, responsible', 'numerical', 'integerOnly'=>true),
			array('name, checklist, members, hours, docs', 'length', 'max'=>255),
			array('status', 'length', 'max'=>1),
			array('description, start_date, end_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, description, start_date, end_date, checklist, status, project, created_by, responsible, members, hours, docs', 'safe', 'on'=>'search'),
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
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'checklist' => 'Checklist',
			'status' => 'Status',
			'project' => 'Project',
			'created_by' => 'Created By',
			'responsible' => 'Responsible',
			'members' => 'Members',
			'hours' => 'Hours',
			'docs' => 'Docs',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('checklist',$this->checklist,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('project',$this->project);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('responsible',$this->responsible);
		$criteria->compare('members',$this->members,true);
		$criteria->compare('hours',$this->hours,true);
		$criteria->compare('docs',$this->docs,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return tasks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
