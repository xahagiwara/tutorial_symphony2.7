<?php

namespace AppBundle\Entity;

class MemberCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function 指定した属性のメンバーが追加されていること()
    {
        $memberCollection = new MemberCollection();
        $this->assertThat($memberCollection->count(), $this->equalTo(0),
            '初期状態のコレクションの要素数が0');
        $memberCollection->addMember('testname', 'testpart', '2015-01-15');
        $this->assertThat($memberCollection->count(), $this->equalTo(1),
            '追加後のコレクションの要素数が1か');
        $member = $memberCollection->last();
        $this->assertThat($member, $this->isInstanceOf(Member::class),
            'コレクションに追加された要素がMemberか');
        $this->assertThat($member->getName(), $this->equalTo('testname'),
            'nameプロパティが設定されているか');
        $this->assertThat($member->getPart(), $this->equalTo('testpart'),
            'partプロパティが設定されているか');
        $this->assertThat($member->getJoinedDate(), $this->equalTo('2015-01-15'),
            'joinedDateプロパティが設定されているか');
    }
}