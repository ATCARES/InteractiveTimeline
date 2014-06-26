<?php
/**
 *
 * @license GNU General Public Licence 2.0 or later
 */

$wgExtensionCredits['parserhook'][] = array(
    'path'           => __FILE__,
    'name'           => 'InteractiveTimeline',
    'version'        => '0.1.0',
    'url'            => '',
    'descriptionmsg' => 'boilerplate-desc',
    'author'         => array( 'Chris Page', )
);

/* Setup */

// Register files
$wgAutoloadClasses['InteractiveTimeline'] = __DIR__ . '/InteractiveTimeline.body.php';
$wgMessagesDirs['InteractiveTimeline'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['InteractiveTimeline'] = __DIR__ . '/InteractiveTimeline.i18n.php';

// Register hooks
$wgHooks['ParserFirstCallInit'][] = 'InteractiveTimeline::setHooks';


// Register modules
$chapResourceTemplate = array(
    'localBasePath' => __DIR__.'/chap-links-library/js/src/timeline',
    'remoteExtPath' => 'InteractiveTimeline/chap-links-library/js/src/timeline',
);
                                )
$wgResourceModules['ext.InteractiveTimeline.timeline'] = $chapResourceTemplate + array(
    'scripts'  => 'timeline-min.js',
    'styles'   => 'timeline.css',
    'position' => 'top',
);


/* Configuration */
