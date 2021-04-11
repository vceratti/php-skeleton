<?php declare(strict_types=1);
#parse("PHP File Header.php")

#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

#if (${TESTED_NAME} && ${NAMESPACE} && !${TESTED_NAMESPACE})
use ${TESTED_NAME};
#elseif (${TESTED_NAME} && ${TESTED_NAMESPACE} && ${NAMESPACE} != ${TESTED_NAMESPACE})
use ${TESTED_NAMESPACE}\\${TESTED_NAME};
#end
use PHPUnit\Framework\TestCase;

#set($class = ${TESTED_NAME})
#set($class_start = $class.substring(0,1).toLowerCase())
#set($class_rest = $class.substring(1))
#set($CLASS_VAR = $class_start.concat($class_rest))
/**
 * @coversDefaultClass \\${TESTED_NAMESPACE}\\${TESTED_NAME}
 */
class ${NAME} extends TestCase {

    private ${TESTED_NAME} $${CLASS_VAR};
    
    public function setUp(): void
    {
        $this->${CLASS_VAR} = new ${TESTED_NAME}();
    }
}
