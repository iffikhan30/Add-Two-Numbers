/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $r = bcadd($this->getNumber($l1), $this->getNumber($l2));
        $c = strlen($r);
        $node = null;
        for ($i=0; $i < $c; $i++) { 
            $node = new ListNode($r[$i], $node);
        }
        return $node;
    }

    function getNumber(ListNode $node) {
        $res = '';
        while ($node->next) {
            $res .= $node->val;
            $node = $node->next;
        }

        return strrev($res . $node->val);
    }
}
