[1mdiff --git a/tests/Model/CollectTest.php b/tests/Model/CollectTest.php[m
[1mindex 6cbcc16..58b32d9 100644[m
[1m--- a/tests/Model/CollectTest.php[m
[1m+++ b/tests/Model/CollectTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Collect;[m
 [m
 use Slince\Shopify\Manager\Collect\Collect;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class CollectTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/CommentTest.php b/tests/Model/CommentTest.php[m
[1mindex 4d7ff8d..1fb1714 100644[m
[1m--- a/tests/Model/CommentTest.php[m
[1m+++ b/tests/Model/CommentTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Article;[m
 [m
 use Slince\Shopify\Manager\Comment\Comment;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class CommentTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/CountryTest.php b/tests/Model/CountryTest.php[m
[1mindex fc7f59b..470c9b4 100644[m
[1m--- a/tests/Model/CountryTest.php[m
[1m+++ b/tests/Model/CountryTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Country;[m
 [m
 use Slince\Shopify\Manager\Country\Country;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class CountryTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/CustomCollectionTest.php b/tests/Model/CustomCollectionTest.php[m
[1mindex 277c5b4..c0db1cd 100644[m
[1m--- a/tests/Model/CustomCollectionTest.php[m
[1m+++ b/tests/Model/CustomCollectionTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Collect;[m
 [m
 use Slince\Shopify\Manager\CustomCollection\CustomCollection;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class CustomCollectionTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/CustomerSavedSearchTest.php b/tests/Model/CustomerSavedSearchTest.php[m
[1mindex 964c357..ddad8e0 100644[m
[1m--- a/tests/Model/CustomerSavedSearchTest.php[m
[1m+++ b/tests/Model/CustomerSavedSearchTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Customer;[m
 [m
 use Slince\Shopify\Manager\CustomerSavedSearch\CustomerSavedSearch;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class CustomerSavedSearchTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/CustomerTest.php b/tests/Model/CustomerTest.php[m
[1mindex 5e463d5..65fd0ad 100644[m
[1m--- a/tests/Model/CustomerTest.php[m
[1m+++ b/tests/Model/CustomerTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Customer;[m
 [m
 use Slince\Shopify\Manager\Customer\Customer;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class CustomerTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/DiscountCodeTest.php b/tests/Model/DiscountCodeTest.php[m
[1mindex 7c4446b..7730466 100644[m
[1m--- a/tests/Model/DiscountCodeTest.php[m
[1m+++ b/tests/Model/DiscountCodeTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\DiscountCode;[m
 [m
 use Slince\Shopify\Manager\DiscountCode\DiscountCode;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class DiscountCodeTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/DraftOrderTest.php b/tests/Model/DraftOrderTest.php[m
[1mindex 28b603c..479b726 100644[m
[1m--- a/tests/Model/DraftOrderTest.php[m
[1m+++ b/tests/Model/DraftOrderTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Order;[m
 [m
 use Slince\Shopify\Manager\DraftOrder\DraftOrder;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class DraftOrderTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/FulfillmentServiceTest.php b/tests/Model/FulfillmentServiceTest.php[m
[1mindex ab1343b..2772fc6 100644[m
[1m--- a/tests/Model/FulfillmentServiceTest.php[m
[1m+++ b/tests/Model/FulfillmentServiceTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\FulfillmentService;[m
 [m
 use Slince\Shopify\Manager\FulfillmentService\FulfillmentService;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class FulfillmentServiceTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/FulfillmentTest.php b/tests/Model/FulfillmentTest.php[m
[1mindex c840440..d5e3161 100644[m
[1m--- a/tests/Model/FulfillmentTest.php[m
[1m+++ b/tests/Model/FulfillmentTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Order;[m
 [m
 use Slince\Shopify\Manager\Fulfillment\Fulfillment;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class FulfillmentTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/ImageTest.php b/tests/Model/ImageTest.php[m
[1mindex c79b335..34f3c89 100644[m
[1m--- a/tests/Model/ImageTest.php[m
[1m+++ b/tests/Model/ImageTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Product;[m
 [m
 use Slince\Shopify\Manager\ProductImage\Image;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class ImageTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/InventoryItemTest.php b/tests/Model/InventoryItemTest.php[m
[1mindex 45cba22..4890c9d 100644[m
[1m--- a/tests/Model/InventoryItemTest.php[m
[1m+++ b/tests/Model/InventoryItemTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\InventoryItem;[m
 [m
 use Slince\Shopify\Manager\InventoryItem\InventoryItem;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class InventoryItemTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/InventoryLevelTest.php b/tests/Model/InventoryLevelTest.php[m
[1mindex fba033d..cd3c4a3 100644[m
[1m--- a/tests/Model/InventoryLevelTest.php[m
[1m+++ b/tests/Model/InventoryLevelTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\InventoryLevel;[m
 [m
 use Slince\Shopify\Manager\InventoryLevel\InventoryLevel;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class InventoryLevelTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/LineItemTest.php b/tests/Model/LineItemTest.php[m
[1mindex bae574f..0bcdc93 100644[m
[1m--- a/tests/Model/LineItemTest.php[m
[1m+++ b/tests/Model/LineItemTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Order;[m
 [m
 use Slince\Shopify\Manager\Order\LineItem;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class LineItemTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/LocationTest.php b/tests/Model/LocationTest.php[m
[1mindex 63962d0..870aa63 100644[m
[1m--- a/tests/Model/LocationTest.php[m
[1m+++ b/tests/Model/LocationTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Location;[m
 [m
 use Slince\Shopify\Manager\Location\Location;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class LocationTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/OrderTest.php b/tests/Model/OrderTest.php[m
[1mindex 5f14cd1..9fe6817 100644[m
[1m--- a/tests/Model/OrderTest.php[m
[1m+++ b/tests/Model/OrderTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Order;[m
 [m
 use Slince\Shopify\Manager\Order\Order;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class OrderTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/PageTest.php b/tests/Model/PageTest.php[m
[1mindex 2c79689..2ff2dfb 100644[m
[1m--- a/tests/Model/PageTest.php[m
[1m+++ b/tests/Model/PageTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Page;[m
 [m
 use Slince\Shopify\Manager\Page\Page;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class PageTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/PolicyTest.php b/tests/Model/PolicyTest.php[m
[1mindex b2c8007..caf054f 100644[m
[1m--- a/tests/Model/PolicyTest.php[m
[1m+++ b/tests/Model/PolicyTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Policy;[m
 [m
 use Slince\Shopify\Manager\Policy\Policy;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class PolicyTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/PriceRuleTest.php b/tests/Model/PriceRuleTest.php[m
[1mindex 2dc434a..dbfb355 100644[m
[1m--- a/tests/Model/PriceRuleTest.php[m
[1m+++ b/tests/Model/PriceRuleTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\PriceRule;[m
 [m
 use Slince\Shopify\Manager\PriceRule\PriceRule;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class PriceRuleTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/ProductTest.php b/tests/Model/ProductTest.php[m
[1mindex 81b5738..e826a52 100644[m
[1m--- a/tests/Model/ProductTest.php[m
[1m+++ b/tests/Model/ProductTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Product;[m
 [m
 use Slince\Shopify\Manager\Product\Product;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class ProductTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/ProvinceTest.php b/tests/Model/ProvinceTest.php[m
[1mindex 7f91dde..3675d13 100644[m
[1m--- a/tests/Model/ProvinceTest.php[m
[1m+++ b/tests/Model/ProvinceTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Country;[m
 [m
 use Slince\Shopify\Manager\Province\Province;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class ProvinceTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/RecurringApplicationChargeTest.php b/tests/Model/RecurringApplicationChargeTest.php[m
[1mindex 1748abe..0f0fa2c 100644[m
[1m--- a/tests/Model/RecurringApplicationChargeTest.php[m
[1m+++ b/tests/Model/RecurringApplicationChargeTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\RecurringApplicationCharge;[m
 [m
 use Slince\Shopify\Manager\RecurringApplicationCharge\RecurringApplicationCharge;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class RecurringApplicationChargeTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/RedirectTest.php b/tests/Model/RedirectTest.php[m
[1mindex ed70972..217111f 100644[m
[1m--- a/tests/Model/RedirectTest.php[m
[1m+++ b/tests/Model/RedirectTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Redirect;[m
 [m
 use Slince\Shopify\Manager\Redirect\Redirect;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class RedirectTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/RefundLineItemTest.php b/tests/Model/RefundLineItemTest.php[m
[1mindex b33f198..dfd13bd 100644[m
[1m--- a/tests/Model/RefundLineItemTest.php[m
[1m+++ b/tests/Model/RefundLineItemTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Order;[m
 [m
 use Slince\Shopify\Manager\Refund\RefundLineItem;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class RefundLineItemTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/RefundTest.php b/tests/Model/RefundTest.php[m
[1mindex f10240c..bc0f24f 100644[m
[1m--- a/tests/Model/RefundTest.php[m
[1m+++ b/tests/Model/RefundTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Order;[m
 [m
 use Slince\Shopify\Manager\Refund\Refund;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class RefundTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/RiskTest.php b/tests/Model/RiskTest.php[m
[1mindex e5d3c85..38b9f13 100644[m
[1m--- a/tests/Model/RiskTest.php[m
[1m+++ b/tests/Model/RiskTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Order;[m
 [m
 use Slince\Shopify\Manager\OrderRisk\Risk;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class RiskTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/ScriptTagTest.php b/tests/Model/ScriptTagTest.php[m
[1mindex 3c582f5..10ea1c7 100644[m
[1m--- a/tests/Model/ScriptTagTest.php[m
[1m+++ b/tests/Model/ScriptTagTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\ScriptTag;[m
 [m
 use Slince\Shopify\Manager\ScriptTag\ScriptTag;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class ScriptTagTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/ShippingLineTest.php b/tests/Model/ShippingLineTest.php[m
[1mindex 7f146b5..b6fdf13 100644[m
[1m--- a/tests/Model/ShippingLineTest.php[m
[1m+++ b/tests/Model/ShippingLineTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Order;[m
 [m
 use Slince\Shopify\Manager\Order\ShippingLine;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class ShippingLineTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/ShippingZoneTest.php b/tests/Model/ShippingZoneTest.php[m
[1mindex ad003c0..8c09867 100644[m
[1m--- a/tests/Model/ShippingZoneTest.php[m
[1m+++ b/tests/Model/ShippingZoneTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\ShippingZone;[m
 [m
 use Slince\Shopify\Manager\ShippingZone\ShippingZone;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class ShippingZoneTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/ShopTest.php b/tests/Model/ShopTest.php[m
[1mindex c6852e0..39e9975 100644[m
[1m--- a/tests/Model/ShopTest.php[m
[1m+++ b/tests/Model/ShopTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Shop;[m
 [m
 use Slince\Shopify\Manager\Shop\Shop;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class ShopTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/SmartCollectionTest.php b/tests/Model/SmartCollectionTest.php[m
[1mindex bc436fd..cd4defd 100644[m
[1m--- a/tests/Model/SmartCollectionTest.php[m
[1m+++ b/tests/Model/SmartCollectionTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\SmartCollection;[m
 [m
 use Slince\Shopify\Manager\SmartCollection\SmartCollection;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class SmartCollectionTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/ThemeTest.php b/tests/Model/ThemeTest.php[m
[1mindex 57cb29a..c972774 100644[m
[1m--- a/tests/Model/ThemeTest.php[m
[1m+++ b/tests/Model/ThemeTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Theme;[m
 [m
 use Slince\Shopify\Manager\Theme\Theme;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class ThemeTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/TransactionTest.php b/tests/Model/TransactionTest.php[m
[1mindex 5c8dcb3..0abdc34 100644[m
[1m--- a/tests/Model/TransactionTest.php[m
[1m+++ b/tests/Model/TransactionTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Transaction;[m
 [m
 use Slince\Shopify\Manager\Transaction\Transaction;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class TransactionTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/VariantTest.php b/tests/Model/VariantTest.php[m
[1mindex d312aac..09cf5a8 100644[m
[1m--- a/tests/Model/VariantTest.php[m
[1m+++ b/tests/Model/VariantTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Variant;[m
 [m
 use Slince\Shopify\Manager\ProductVariant\Variant;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class VariantTest extends ModelTestCase[m
 {[m
[1mdiff --git a/tests/Model/WebhookTest.php b/tests/Model/WebhookTest.php[m
[1mindex 9a5692e..ef48a8b 100644[m
[1m--- a/tests/Model/WebhookTest.php[m
[1m+++ b/tests/Model/WebhookTest.php[m
[36m@@ -3,7 +3,7 @@[m
 namespace Slince\Shopify\Tests\Webhook;[m
 [m
 use Slince\Shopify\Manager\Webhook\Webhook;[m
[31m-use Slince\Shopify\Tests\Base\ModelTestCase;[m
[32m+[m
 [m
 class WebhookTest extends ModelTestCase[m
 {[m
