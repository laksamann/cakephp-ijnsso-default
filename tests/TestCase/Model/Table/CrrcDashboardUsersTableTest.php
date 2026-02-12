<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrrcDashboardUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrrcDashboardUsersTable Test Case
 */
class CrrcDashboardUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CrrcDashboardUsersTable
     */
    protected $CrrcDashboardUsers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.CrrcDashboardUsers',
        'app.UserSsos',
        'app.RoleSsos',
        'app.StatusSsos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CrrcDashboardUsers') ? [] : ['className' => CrrcDashboardUsersTable::class];
        $this->CrrcDashboardUsers = $this->getTableLocator()->get('CrrcDashboardUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CrrcDashboardUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\CrrcDashboardUsersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\CrrcDashboardUsersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
