<?php

namespace local_persistent;

use advanced_testcase;
use core\persistent;

/**
 * Pruebas unitarias para la clase report.
 *
 * @package    local_persistent
 * @category   test
 * @covers     \core\persistent
 */
class report_test extends advanced_testcase {

    /**
     * Configuracion inicial antes de cada prueba.
     */
    protected function setUp(): void {
        $this->resetAfterTest();
    }

    /**
     * Test 1: Creacion valida de la instancia persistent.
     */
    public function test_creacion_valida(): void {
        $data = [
            'name' => 'Reporte de prueba',
            'status' => 1
        ];

        $persistent = $this->getMockForAbstractClass(persistent::class, [(object) $data]);

        $this->assertInstanceOf(persistent::class, $persistent);
        $this->assertEquals('Reporte de prueba', $persistent->get('name'));
    }

    /**
     * Test 2: Verificacion de valores por defecto al instanciar.
     */
    public function test_valores_por_defecto(): void {
        $persistent = $this->getMockForAbstractClass(persistent::class);

        $this->assertEquals(0, $persistent->get('id'));
    }

    /**
     * Test 3: Validacion al intentar obtener o definir un campo invalido.
     */
    public function test_campo_invalido_lanza_excepcion(): void {
        $this->expectException(\coding_exception::class);

        $persistent = $this->getMockForAbstractClass(persistent::class);
        $persistent->get('campo_inexistente_que_no_existe');
    }
}