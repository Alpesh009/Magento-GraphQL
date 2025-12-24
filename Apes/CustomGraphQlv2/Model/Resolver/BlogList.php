<?php

declare(strict_types=1);

namespace Apes\CustomGraphQlv2\Model\Resolver;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

/**
 * Class BlogList
 */
class BlogList implements ResolverInterface
{

     /**
      * Resolve Function
      *
      * @param Field       $field   Field.
      * @param Context     $context Context.
      * @param ResolveInfo $info    ResolveInfo.
      * @param array       $value   Array.
      * @param array       $args    Array.
      *
      * @throws GraphQlInputException GraphQlInputException.
      * @throws GraphQlNoSuchEntityException GraphQlNoSuchEntityException.
      *
      * @return array
      */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value=null,
        array $args=null
    ) {
       
        $categoryList = [
            "category_id" => 233,
            "category_name" => "SmarthPhones"
        ];
        $postData = array(
            "name" => "My Blog",
            "url_key" => "WWW.google.com",
            "status" => 1,
            "category" => $categoryList
        );


        return $postData;

    }//end resolve()


}//end class