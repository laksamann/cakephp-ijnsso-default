<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SsoUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SsoUsersTable Test Case
 */
class SsoUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SsoUsersTable
     */
    protected $SsoUsers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.SsoUsers',
        'app.Departments',
        'app.Roles',
        'app.Statuses',
        'app.AccessroleErs',
        'app.AccessroleIcutv',
        'app.AccessroleIjncarecrrc',
        'app.AccessroleIjncc',
        'app.AccessroleIjncert',
        'app.AccessroleIjncfc',
        'app.AccessroleIjncg',
        'app.AccessroleIjnclinical',
        'app.AccessroleIjnclubselection',
        'app.AccessroleIjncsi',
        'app.AccessroleIjnct',
        'app.AccessroleIjnemos',
        'app.AccessroleIjneq',
        'app.AccessroleIjnfr',
        'app.AccessroleIjngc',
        'app.AccessroleIjngps',
        'app.AccessroleIjnhandhygiene',
        'app.AccessroleIjnheartfailures',
        'app.AccessroleIjnhodevaluation',
        'app.AccessroleIjniclms',
        'app.AccessroleIjnmarketing',
        'app.AccessroleIjnmcm',
        'app.AccessroleIjnmedshelf',
        'app.AccessroleIjnmeus',
        'app.AccessroleIjnmna',
        'app.AccessroleIjnncl',
        'app.AccessroleIjnnutribites',
        'app.AccessroleIjnopenhouse',
        'app.AccessroleIjnpatient',
        'app.AccessroleIjnphysio',
        'app.AccessroleIjnpm',
        'app.AccessroleIjns',
        'app.AccessroleIjnsb',
        'app.AccessroleIjnsedondonraiye',
        'app.AccessroleIjntransport',
        'app.AccessroleIjntrax',
        'app.AccessroleIjnvs',
        'app.AccessroleIjnward',
        'app.AccessroleIjnwhd',
        'app.AccessroleMisqps',
        'app.AccessrolePharmcat',
        'app.UserManagers',
        'app.UserTokens',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SsoUsers') ? [] : ['className' => SsoUsersTable::class];
        $this->SsoUsers = $this->getTableLocator()->get('SsoUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SsoUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\SsoUsersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\SsoUsersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test defaultConnectionName method
     *
     * @return void
     * @link \App\Model\Table\SsoUsersTable::defaultConnectionName()
     */
    public function testDefaultConnectionName(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
