<?php namespace Cyclos;

/**
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/RecordCustomFieldPossibleValueCategoryService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class RecordCustomFieldPossibleValueCategoryService extends Service {

    function __construct() {
        parent::__construct('recordCustomFieldPossibleValueCategoryService');
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/RecordCustomFieldPossibleValueCategoryService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/RecordCustomFieldPossibleValueCategoryService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * @param customFieldId Java type: java.lang.Long
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/RecordCustomFieldPossibleValueCategoryService.html#list(java.lang.Long)
     */
    public function _list($customFieldId) {
        return $this->run('list', array($customFieldId));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/RecordCustomFieldPossibleValueCategoryService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * @param id Java type: java.lang.Long     * @param up Java type: boolean
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/RecordCustomFieldPossibleValueCategoryService.html#move(java.lang.Long,%20boolean)
     */
    public function move($id, $up) {
        $this->run('move', array($id, $up));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/RecordCustomFieldPossibleValueCategoryService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/RecordCustomFieldPossibleValueCategoryService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/RecordCustomFieldPossibleValueCategoryService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * @param dtos Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/RecordCustomFieldPossibleValueCategoryService.html#saveCategories(java.util.List)
     */
    public function saveCategories($dtos) {
        $this->run('saveCategories', array($dtos));
    }
    
    /**
     * @param customFieldCategoryIds Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/RecordCustomFieldPossibleValueCategoryService.html#saveOrder(java.util.List)
     */
    public function saveOrder($customFieldCategoryIds) {
        $this->run('saveOrder', array($customFieldCategoryIds));
    }
    
}