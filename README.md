# pkg_agpay / Joomla System Plugin for converting a HTML code in a HTML code more accessible
 
# Quickstart

1. Install this package via Joomla! installer. 
Please activate the plugin via `Extension | Plugins` before you use it. 
If you do not find the plugin entry, you can search it via the search field.
...

# Options

You find the options of this plugin in the menu 
`Extensions | Plugins`. Then choose the entry `System - Agay (Accessibility)`

![ay2]()

## Hide visual changes


![ay1]()

## Display the alternative text of all images


### If there is not `title`, the `alt`-text is copied to the `title`

This code 

```
<img 
src="images/sampledata/parks/banner_cradle.jpg" 
alt="Cradle Park Banner" 
border="0" />
```

is changed to

```
<img 
src="/joomla-cms/images/sampledata/parks/banner_cradle.jpg" 
alt="Cradle Park Banner" 
border="0" 
title="Cradle Park Banner" 
id="id-hatemile-display-ae7398d6fd7d5e69fb8c3e9921f51a946231eeb04aaf185c0bb4265761023eea-0" 
data-attributetitleof="id-hatemile-display-ae7398d6fd7d5e69fb8c3e9921f51a946231eeb04aaf185c0bb4265761023eea-0">
```

### If there is no `alt`, the `title`-text is copied to the `alt`

This code 

```
<img 
title="Cradle Park Banner" 
src="images/sampledata/parks/banner_cradle.jpg" 
border="0" />
```

is changed to

```
<img 
title="Cradle Park Banner" 
src="/joomla-cms/images/sampledata/parks/banner_cradle.jpg" 
border="0" 
alt="Cradle Park Banner" 
id="id-hatemile-display-ae7398d6fd7d5e69fb8c3e9921f51a946231eeb04aaf185c0bb4265761023eea-1" 
data-attributetitleof="id-hatemile-display-ae7398d6fd7d5e69fb8c3e9921f51a946231eeb04aaf185c0bb4265761023eea-1">
```

### If there is not `title` and no `alt`, the `alt`-text is set with an empty value.

This code 

```
<img 
src="images/sampledata/parks/banner_cradle.jpg" 
border="0" />
```

is changed to

```
<img 
src="/joomla-cms/images/sampledata/parks/banner_cradle.jpg" 
border="0" 
alt="" 
role="presentation" 
aria-hidden="true">
```


## Display the headers of each data cell of all tables

```
<table>
<thead><tr>
<th>Month</th>
<th>Savings</th>
</tr></thead>
<tbody>
<tr>
<td>January</td>
<td>$100</td>
</tr>
<tr>
<td>February</td>
<td>$80</td>
</tr>
</tbody>
<tfoot><tr>
<td>Sum</td>
<td>$180</td>
</tr></tfoot>
</table>
```


```
<table>
<thead><tr>
<th id="id-hatemile-association-1a853a103234e2c92e725bc919e88ec119cdd89ab8ecb90c0e2da45e8a6f5a0c-0" scope="col">Month</th>
<th id="id-hatemile-association-1a853a103234e2c92e725bc919e88ec119cdd89ab8ecb90c0e2da45e8a6f5a0c-1" scope="col">Savings</th>
</tr></thead>
<tbody>
<tr>
<td headers="id-hatemile-association-1a853a103234e2c92e725bc919e88ec119cdd89ab8ecb90c0e2da45e8a6f5a0c-0">January</td>
<td headers="id-hatemile-association-1a853a103234e2c92e725bc919e88ec119cdd89ab8ecb90c0e2da45e8a6f5a0c-1">$100</td>
</tr>
<tr>
<td headers="id-hatemile-association-1a853a103234e2c92e725bc919e88ec119cdd89ab8ecb90c0e2da45e8a6f5a0c-0">February</td>
<td headers="id-hatemile-association-1a853a103234e2c92e725bc919e88ec119cdd89ab8ecb90c0e2da45e8a6f5a0c-1">$80</td>
</tr>
</tbody>
<tfoot><tr>
<td headers="id-hatemile-association-1a853a103234e2c92e725bc919e88ec119cdd89ab8ecb90c0e2da45e8a6f5a0c-0">Sum</td>
<td headers="id-hatemile-association-1a853a103234e2c92e725bc919e88ec119cdd89ab8ecb90c0e2da45e8a6f5a0c-1">$180</td>
</tr></tfoot>
</table>
```


```
<table>
<thead><tr>
<th id="id-hatemile-association-3ae888d90c5766fad11c8e45c61cadbabbcdad2645d011b449841a478930d593-0" scope="col">Month</th>
<th id="id-hatemile-association-3ae888d90c5766fad11c8e45c61cadbabbcdad2645d011b449841a478930d593-1" scope="col">Savings</th>
</tr></thead>
<tbody>
<tr>
<td headers="id-hatemile-association-3ae888d90c5766fad11c8e45c61cadbabbcdad2645d011b449841a478930d593-0" id="id-hatemile-display-f56e05274df4cb8375e895d4e65a4042f01a0b09f5fc946b0086c660ad1dd996-0">
<span class="force-read-before" data-headersof="id-hatemile-display-f56e05274df4cb8375e895d4e65a4042f01a0b09f5fc946b0086c660ad1dd996-0"> (Headers: Month) </span>January</td>
<td headers="id-hatemile-association-3ae888d90c5766fad11c8e45c61cadbabbcdad2645d011b449841a478930d593-1" id="id-hatemile-display-f56e05274df4cb8375e895d4e65a4042f01a0b09f5fc946b0086c660ad1dd996-1">
<span class="force-read-before" data-headersof="id-hatemile-display-f56e05274df4cb8375e895d4e65a4042f01a0b09f5fc946b0086c660ad1dd996-1"> (Headers: Savings) </span>$100</td>
</tr>
<tr>
<td headers="id-hatemile-association-3ae888d90c5766fad11c8e45c61cadbabbcdad2645d011b449841a478930d593-0" id="id-hatemile-display-f56e05274df4cb8375e895d4e65a4042f01a0b09f5fc946b0086c660ad1dd996-2">
<span class="force-read-before" data-headersof="id-hatemile-display-f56e05274df4cb8375e895d4e65a4042f01a0b09f5fc946b0086c660ad1dd996-2"> (Headers: Month) </span>February</td>
<td headers="id-hatemile-association-3ae888d90c5766fad11c8e45c61cadbabbcdad2645d011b449841a478930d593-1" id="id-hatemile-display-f56e05274df4cb8375e895d4e65a4042f01a0b09f5fc946b0086c660ad1dd996-3">
<span class="force-read-before" data-headersof="id-hatemile-display-f56e05274df4cb8375e895d4e65a4042f01a0b09f5fc946b0086c660ad1dd996-3"> (Headers: Savings) </span>$80</td>
</tr>
</tbody>
<tfoot><tr>
<td headers="id-hatemile-association-3ae888d90c5766fad11c8e45c61cadbabbcdad2645d011b449841a478930d593-0" id="id-hatemile-display-f56e05274df4cb8375e895d4e65a4042f01a0b09f5fc946b0086c660ad1dd996-4">
<span class="force-read-before" data-headersof="id-hatemile-display-f56e05274df4cb8375e895d4e65a4042f01a0b09f5fc946b0086c660ad1dd996-4"> (Headers: Month) </span>Sum</td>
<td headers="id-hatemile-association-3ae888d90c5766fad11c8e45c61cadbabbcdad2645d011b449841a478930d593-1" id="id-hatemile-display-f56e05274df4cb8375e895d4e65a4042f01a0b09f5fc946b0086c660ad1dd996-5">
<span class="force-read-before" data-headersof="id-hatemile-display-f56e05274df4cb8375e895d4e65a4042f01a0b09f5fc946b0086c660ad1dd996-5"> (Headers: Savings) </span>$180</td>
</tr></tfoot>
</table>
```


## Display the language of all elements	

## Display the attributes of all links	

## Display the WAI-ARIA roles of all elements	

## Display the titles of all elements	

## Display all shortcuts	

## Display the WAI-ARIA attributes of all elements	

## Provide links to access the longs descriptions
	

## Provide navigation by headings	

## Provide navigation by content skippers	

# FAQ
## What is a a11y?
a11y is a numeronym presenting accessibility as "a" followed by 11 more letters, followed by "y"

# Support and New Features

This Joomla! Extension is a simple feature. But it is most likely, that your requirements are 
already covered or require very little adaptation.

If you have more complex requirements, need new features or just need some support, 
I am open to doing paid custom work and support around this Joomla! Extension. 

Contact me and we'll sort this out!
