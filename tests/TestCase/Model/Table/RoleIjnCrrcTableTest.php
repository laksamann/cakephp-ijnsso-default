<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoleIjnCrrcTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoleIjnCrrcTable Test Case
 */
class RoleIjnCrrcTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RoleIjnCrrcTable
     */
    protected $RoleIjnCrrc;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.RoleIjnCrrc',
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
        $config = $this->getTableLocator()->exists('RoleIjnCrrc') ? [] : ['className' => RoleIjnCrrcTable::class];
        $this->RoleIjnCrrc = $this->getTableLocator()->get('RoleIjnCrrc', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RoleIjnCrrc);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\RoleIjnCrrcTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\RoleIjnCrrcTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test defaultConnectionName method
     *
     * @return void
     * @link \App\Model\Table\RoleIjnCrrcTable::defaultConnectionName()
     */
    public function testDefaultConnectionName(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
