<?php
declare(strict_types=1);

namespace Apes\CustomGraphQl\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

/**
 * CustomMessage Resolver
 * Fetches the custom message data to be returned by the GraphQL query.
 */
class CustomMessage implements ResolverInterface
{
    /**
     * @inheritdoc
     * @param Field $field
     * @param mixed $context
     * @param ResolveInfo $info
     * @param array|null $value
     * @param array|null $args
     * @throws \Exception
     * @return array
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ): array {
        // This is the core logic. In a real module, this would call service layers,
        // repositories, or collections to fetch data from the database.
        
        // For this example, we return a simple hardcoded array.
        return [
            'message' => 'Hello from a Custom Magento 2 GraphQL API!',
            'timestamp' => (new \DateTime())->format('Y-m-d H:i:s'),
            'status' => 1,
        ];
    }
}
