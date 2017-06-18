<?php
/**
 * Hooks
 */

$GLOBALS['TL_HOOKS']['getPageLayout'][] = array('\Pdir\AmphtmlHooks', 'ampGetPageLayout');
$GLOBALS['TL_HOOKS']['generateFrontendUrl'][] = array('\Pdir\AmphtmlHooks', 'ampGenerateFrontendUrl');
$GLOBALS['TL_HOOKS']['replaceDynamicScriptTags'][] = array('\Pdir\AmphtmlHooks', 'unbindDynamicScriptTags');
//$GLOBALS['TL_HOOKS']['generateFrontendUrl'][] = array('\Pdir\AmphtmlHooks', 'ampGenerateFrontendUrl');