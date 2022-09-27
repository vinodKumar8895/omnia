<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - permission [dynamicPermissionResource]
 * - dataObjectWorkspaceDefinition [advancedManyToManyRelation]
 * - assetWorkspaceDefinition [advancedManyToManyRelation]
 * - visibleLanguages [languagemultiselect]
 * - editableLanguages [languagemultiselect]
 */

return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'dao' => NULL,
   'id' => 'portalusergroup',
   'name' => 'PortalUserGroup',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1662469592,
   'userOwner' => 0,
   'userModification' => 0,
   'parentClass' => 'Pimcore\\Bundle\\PortalEngineBundle\\Model\\DataObject\\AbstractPortalUserGroup',
   'implementsInterfaces' => '',
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'encryption' => false,
   'encryptedTables' => 
  array (
  ),
   'allowInherit' => false,
   'allowVariants' => false,
   'showVariants' => false,
   'fieldDefinitions' => 
  array (
  ),
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => NULL,
     'height' => NULL,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'children' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'children' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Permissions',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Permissions',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' => 
            array (
              0 => 
              FrontendPermissionToolkitBundle\CoreExtensions\ClassDefinitions\DynamicPermissionResource::__set_state(array(
                 'name' => 'permission',
                 'title' => 'permission',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'dynamicPermissionResource',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'queryColumnType' => 'longtext',
                 'columnType' => 'longtext',
                 'phpdocType' => 'array',
                 'dataProvider' => '@Pimcore\\Bundle\\PortalEngineBundle\\Service\\Security\\FrontendPermissionToolkit\\DataProvider',
                 'permissionResources' => 
                array (
                ),
                 'permissionOptions' => 
                array (
                  0 => 
                  array (
                    'key' => 'inherit',
                    'value' => 'inherit',
                  ),
                  1 => 
                  array (
                    'key' => 'allow',
                    'value' => 'allow',
                  ),
                  2 => 
                  array (
                    'key' => 'deny',
                    'value' => 'deny',
                  ),
                ),
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 600,
             'labelAlign' => 'left',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Workspaces',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Workspaces',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyRelation::__set_state(array(
                 'name' => 'dataObjectWorkspaceDefinition',
                 'title' => 'Data Object Workspace Definition',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'advancedManyToManyRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'classes' => 
                array (
                ),
                 'pathFormatterClass' => '',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'assetUploadPath' => '',
                 'objectsAllowed' => true,
                 'assetsAllowed' => false,
                 'assetTypes' => 
                array (
                ),
                 'documentsAllowed' => false,
                 'documentTypes' => 
                array (
                ),
                 'enableTextSelection' => false,
                 'columns' => 
                array (
                  0 => 
                  array (
                    'type' => 'bool',
                    'position' => 1,
                    'key' => 'permission_view',
                    'id' => 'extModel20720-1',
                    'label' => 'View',
                  ),
                  1 => 
                  array (
                    'type' => 'bool',
                    'position' => 2,
                    'key' => 'permission_download',
                    'id' => 'extModel20720-2',
                    'label' => 'Download',
                  ),
                ),
                 'columnKeys' => 
                array (
                  0 => 'permission_view',
                  1 => 'permission_download',
                ),
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]',
                 'optimizedAdminLoading' => false,
                 'enableBatchEdit' => false,
                 'allowMultipleAssignments' => false,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyRelation::__set_state(array(
                 'name' => 'assetWorkspaceDefinition',
                 'title' => 'Asset Workspace Definition',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'advancedManyToManyRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'classes' => 
                array (
                ),
                 'pathFormatterClass' => '',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'assetUploadPath' => '',
                 'objectsAllowed' => false,
                 'assetsAllowed' => true,
                 'assetTypes' => 
                array (
                ),
                 'documentsAllowed' => false,
                 'documentTypes' => 
                array (
                ),
                 'enableTextSelection' => false,
                 'columns' => 
                array (
                  0 => 
                  array (
                    'type' => 'bool',
                    'position' => 1,
                    'key' => 'permission_view',
                    'id' => 'extModel20720-1',
                    'label' => 'View',
                  ),
                  1 => 
                  array (
                    'type' => 'bool',
                    'position' => 2,
                    'key' => 'permission_download',
                    'id' => 'extModel20720-2',
                    'label' => 'Download',
                  ),
                  2 => 
                  array (
                    'type' => 'bool',
                    'position' => 3,
                    'key' => 'permission_edit',
                    'id' => 'extModel11843-1',
                    'label' => 'Edit',
                  ),
                  3 => 
                  array (
                    'type' => 'bool',
                    'position' => 4,
                    'key' => 'permission_update',
                    'id' => 'extModel11843-2',
                    'label' => 'Update',
                  ),
                  4 => 
                  array (
                    'type' => 'bool',
                    'position' => 5,
                    'key' => 'permission_create',
                    'id' => 'extModel11843-3',
                    'label' => 'Create',
                  ),
                  5 => 
                  array (
                    'type' => 'bool',
                    'position' => 6,
                    'key' => 'permission_delete',
                    'id' => 'extModel11843-4',
                    'label' => 'Delete',
                  ),
                  6 => 
                  array (
                    'type' => 'bool',
                    'position' => 7,
                    'key' => 'permission_subfolder',
                    'id' => 'extModel2359-1',
                    'label' => 'Manage Subfolders',
                    'width' => 120,
                  ),
                  7 => 
                  array (
                    'type' => 'bool',
                    'position' => 8,
                    'key' => 'permission_view_owned_assets_only',
                    'id' => 'extModel8944-1',
                    'label' => 'View owned assets only',
                    'width' => 160,
                  ),
                ),
                 'columnKeys' => 
                array (
                  0 => 'permission_view',
                  1 => 'permission_download',
                  2 => 'permission_edit',
                  3 => 'permission_update',
                  4 => 'permission_create',
                  5 => 'permission_delete',
                  6 => 'permission_subfolder',
                  7 => 'permission_view_owned_assets_only',
                ),
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]',
                 'optimizedAdminLoading' => false,
                 'enableBatchEdit' => false,
                 'allowMultipleAssignments' => false,
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 100,
             'labelAlign' => 'left',
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Languages',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Languages',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Languagemultiselect::__set_state(array(
                 'name' => 'visibleLanguages',
                 'title' => 'Visible languages',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'languagemultiselect',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'renderType' => 'tags',
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'dynamicOptions' => false,
                 'onlySystemLanguages' => true,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Languagemultiselect::__set_state(array(
                 'name' => 'editableLanguages',
                 'title' => 'Editable languages',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'languagemultiselect',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'renderType' => 'tags',
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'dynamicOptions' => false,
                 'onlySystemLanguages' => true,
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 100,
             'labelAlign' => 'left',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'fieldtype' => 'tabpanel',
         'border' => false,
         'tabPosition' => NULL,
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' => 
    array (
    ),
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'icon' => '',
   'previewUrl' => '',
   'group' => 'PortalEngine',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'previewGeneratorReference' => NULL,
   'compositeIndices' => 
  array (
  ),
   'generateTypeDeclarations' => false,
   'showFieldLookup' => false,
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'enableGridLocking' => false,
   'deletedDataComponents' => 
  array (
  ),
   'blockedVarsForExport' => 
  array (
  ),
   'activeDispatchingEvents' => 
  array (
  ),
));
