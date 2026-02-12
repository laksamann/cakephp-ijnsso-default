<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SsoStatusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SsoStatusesTable Test Case
 */
class SsoStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SsoStatusesTable
     */
    protected $SsoStatuses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.SsoStatuses',
        'app.AccessroleErs',
        'app.AccessroleIcutv',
        'app.AccessroleIjncarecrrc',
        'app.AccessroleIjncc',
        'app.AccessroleIjncert',
        'app.AccessroleIjncfc',
        'app.AccessroleIjncg',
        'app.AccessroleIjnclinical',
        'app.AccessroleIjnclinicaltc',
        'app.AccessroleIjnclubselection',
        'app.AccessroleIjncsi',
        'app.AccessroleIjnct',
        'app.AccessroleIjnemos',
        'app.AccessroleIjneq',
        'app.AccessroleIjnfr',
        'app.AccessroleIjnfrSpecifics',
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
        'app.AccessroleIjnnclSpecifics',
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
        'app.Directories',
        'app.RoleErs',
        'app.RoleIcutv',
        'app.RoleIjncarecrrc',
        'app.RoleIjncc',
        'app.RoleIjncert',
        'app.RoleIjncfc',
        'app.RoleIjncg',
        'app.RoleIjnclinical',
        'app.RoleIjnclubselection',
        'app.RoleIjncsi',
        'app.RoleIjnct',
        'app.RoleIjnemos',
        'app.RoleIjneq',
        'app.RoleIjnfr',
        'app.RoleIjngc',
        'app.RoleIjngps',
        'app.RoleIjnhandhygiene',
        'app.RoleIjnheartfailures',
        'app.RoleIjnhodevaluation',
        'app.RoleIjniclms',
        'app.RoleIjnmarketing',
        'app.RoleIjnmcm',
        'app.RoleIjnmedshelf',
        'app.RoleIjnmeus',
        'app.RoleIjnmna',
        'app.RoleIjnncl',
        'app.RoleIjnnutribites',
        'app.RoleIjnopenhouse',
        'app.RoleIjnpatient',
        'app.RoleIjnphysio',
        'app.RoleIjnpm',
        'app.RoleIjns',
        'app.RoleIjnsb',
        'app.RoleIjnsedondonraiye',
        'app.RoleIjntransport',
        'app.RoleIjntrax',
        'app.RoleIjnvs',
        'app.RoleIjnward',
        'app.RoleIjnwhd',
        'app.RoleMisqps',
        'app.RolePharmcat',
        'app.RoleSpecificIjnfr',
        'app.RoleSpecificIjnncl',
        'app.Roles',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SsoStatuses') ? [] : ['className' => SsoStatusesTable::class];
        $this->SsoStatuses = $this->getTableLocator()->get('SsoStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SsoStatuses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\SsoStatusesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test defaultConnectionName method
     *
     * @return void
     * @link \App\Model\Table\SsoStatusesTable::defaultConnectionName()
     */
    public function testDefaultConnectionName(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
