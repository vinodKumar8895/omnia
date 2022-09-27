<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - email [email]
 * - firstname [input]
 * - lastname [input]
 * - preferredLanguage [select]
 * - pimcoreUser [user]
 * - usePimcoreUserPassword [checkbox]
 * - portalPassword [password]
 * - groups [permissionManyToManyRelation]
 * - externalUserId [input]
 * - avatar [image]
 * - admin [checkbox]
 * - permission [dynamicPermissionResource]
 * - dataObjectWorkspaceDefinition [advancedManyToManyRelation]
 * - assetWorkspaceDefinition [advancedManyToManyRelation]
 * - visibleLanguages [languagemultiselect]
 * - editableLanguages [languagemultiselect]
 */

return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'dao' => NULL,
   'id' => 'portaluser',
   'name' => 'PortalUser',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1662469592,
   'userOwner' => 0,
   'userModification' => 0,
   'parentClass' => 'Pimcore\\Bundle\\PortalEngineBundle\\Model\\DataObject\\AbstractPortalUser',
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
             'name' => 'Base Data',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Base Data',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Email::__set_state(array(
                 'name' => 'email',
                 'title' => 'E-Mail',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => true,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'email',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => NULL,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => NULL,
                 'showCharCount' => NULL,
                 'defaultValueGenerator' => '',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'firstname',
                 'title' => 'First Name',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => NULL,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'lastname',
                 'title' => 'Last Name',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => NULL,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'preferredLanguage',
                 'title' => 'Preferred Language',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'select',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'options' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'defaultValueGenerator' => '',
              )),
              4 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\User::__set_state(array(
                 'name' => 'pimcoreUser',
                 'title' => 'Pimcore User',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'user',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'defaultValueGenerator' => '',
                 'unique' => false,
              )),
              5 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Checkbox::__set_state(array(
                 'name' => 'usePimcoreUserPassword',
                 'title' => 'Use Pimcore User Password',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'checkbox',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'defaultValue' => NULL,
                 'defaultValueGenerator' => '',
              )),
              6 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Password::__set_state(array(
                 'name' => 'portalPassword',
                 'title' => 'Password',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'password',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'algorithm' => 'password_hash',
                 'salt' => '',
                 'saltlocation' => 'back',
                 'minimumLength' => NULL,
              )),
              7 => 
              FrontendPermissionToolkitBundle\CoreExtensions\ClassDefinitions\PermissionManyToManyRelation::__set_state(array(
                 'name' => 'groups',
                 'title' => 'Groups',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'permissionManyToManyRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'PortalUserGroup',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'width' => '',
                 'height' => '',
                 'maxItems' => NULL,
                 'visibleFields' => 
                array (
                ),
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'enableTextSelection' => false,
                 'visibleFieldDefinitions' => 
                array (
                ),
              )),
              8 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'externalUserId',
                 'title' => 'External User ID',
                 'tooltip' => 'Can be used to embed external authentication systems.',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => NULL,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              9 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Image::__set_state(array(
                 'name' => 'avatar',
                 'title' => 'Avatar',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'image',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'height' => '',
                 'uploadPath' => '',
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
             'labelWidth' => 200,
             'labelAlign' => 'left',
          )),
          1 => 
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Checkbox::__set_state(array(
                 'name' => 'admin',
                 'title' => 'Admin',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'checkbox',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'defaultValue' => NULL,
                 'defaultValueGenerator' => '',
              )),
              1 => 
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
          2 => 
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
                    'id' => 'extModel9814-1',
                    'label' => 'Edit',
                  ),
                  3 => 
                  array (
                    'type' => 'bool',
                    'position' => 4,
                    'key' => 'permission_update',
                    'id' => 'extModel9814-2',
                    'label' => 'Update',
                  ),
                  4 => 
                  array (
                    'type' => 'bool',
                    'position' => 5,
                    'key' => 'permission_create',
                    'id' => 'extModel9814-3',
                    'label' => 'Create',
                  ),
                  5 => 
                  array (
                    'type' => 'bool',
                    'position' => 6,
                    'key' => 'permission_delete',
                    'id' => 'extModel9814-4',
                    'label' => 'Delete',
                    'width' => NULL,
                  ),
                  6 => 
                  array (
                    'type' => 'bool',
                    'position' => 7,
                    'key' => 'permission_subfolder',
                    'id' => 'extModel2121-1',
                    'label' => 'Manage Subfolders',
                    'width' => 120,
                  ),
                  7 => 
                  array (
                    'type' => 'bool',
                    'position' => 8,
                    'key' => 'permission_view_owned_assets_only',
                    'id' => 'extModel5410-1',
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
          3 => 
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
                 'title' => 'Editable Languages',
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
