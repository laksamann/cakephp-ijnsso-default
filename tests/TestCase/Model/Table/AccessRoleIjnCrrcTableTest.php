<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccessRoleIjnCrrcTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccessRoleIjnCrrcTable Test Case
 */
class AccessRoleIjnCrrcTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AccessRoleIjnCrrcTable
     */
    protected $AccessRoleIjnCrrc;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.AccessRoleIjnCrrc',
        'app.Users',
        'app.Roles',
        'app.Statuses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AccessRoleIjnCrrc') ? [] : ['className' => AccessRoleIjnCrrcTable::class];
        $this->AccessRoleIjnCrrc = $this->getTableLocator()->get('AccessRoleIjnCrrc', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AccessRoleIjnCrrc);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\AccessRoleIjnCrrcTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\AccessRoleIjnCrrcTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test defaultConnectionName method
     *
     * @return void
     * @link \App\Model\Table\AccessRoleIjnCrrcTable::defaultConnectionName()
     */
    public function testDefaultConnectionName(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
