<?php
// TODO : use composer
// TODO : use appropriate symfony components (console, process)
// TODO : externalize parameters

$dirSources = '/opt/dev/sources';
$dirHtdocs = '/opt/dev/htdocs';
$mapGit = array(
	'net.musiques-incongrues.www'  => array(
	  'repository'      => 'git@github.com:constructions-incongrues/net.musiques-incongrues.www.git',
	  'htdocs'          => 'web',
	  'dsnProd'         => '',
	  'bootstrapScript' => ''
	)
);

// Setup projects
foreach ($mapGit as $projectName => $projectSpec) {
  // TODO : clone or update clone
  // TODO : create htdocs link
  // TODO : optionnaly create database from production DSN (replace "." by "_" in project name)
  // TODO : run project bootstrap script
}
