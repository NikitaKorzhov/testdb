<?php

use yii\db\Migration;

/**
 * Class m181026_123400_Users
 */
class m181026_123400_Users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('events', [
            'id' => $this->primaryKey(),
            'caption' => $this->string()->notNull()
        ]);
        $this->createTable('bids', [
            'id' => $this->primaryKey(),
            'event_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'price' => $this->integer()->notNull(),


        ]);
        $this->createIndex(
            'id-event-event_id',
            'bids',
            'event_id'
        );

        // add foreign key for table `post`
        $this->addForeignKey(
            'fk-post_tag-post_id',
            'bids',
            'event_id',
            'events',
            'id',
            'CASCADE'
        );
        $this->batchInsert('events', ['caption'],[
            ['Atlas weekend 2017'],
            ["gren gray"],
                ["Футбол"],
                ["Волейбол"],
                ["концерт Вакарчука"],
                ["кровавая вечеринка(Хеловин)"],
                ["дискотека"]
            ]
        );
        $this->batchInsert('bids', ['event_id',"name","email","price"],[
            [1,'Vasiliy',"vas@gmail.com",150],
                [2,'Niklay',"nik@gmail.com",150],
                [3,'Petro',"Petya@gmail.com",550],
                [5,'Her Shtainer',"SCHk@gmail.com",1500],
                [5,'Muller',"deuschk@gmail.com",1500],
                [5,'Vilgelm',"Friz@gmail.com",1500],
                [5,'Taras',"Potapenko@gmail.com",1500],
                [5,'Yarina',"Yar@gmail.com",1500]
                ]
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181026_123400_Users cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181026_123400_Users cannot be reverted.\n";

        return false;
    }
    */
}
