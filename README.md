# Yonoma Email Marketing PHP SDK

The official PHP client library for the Yonoma Email Marketing API

## Installation

Install via Packagist
```
composer require yonoma/yonoma-php
```

Or add the following to `composer.json`
```
{
  "require": {
    "yonoma/yonoma-php": "*"
  }
}
```

## Quick Start

### Note : This SDK requires PHP version 7.4 or above.

```php
require_once('/Yonoma/vendor/autoload.php');

$yonoma = new Yonoma\ApiClient('YOUR-API-KEY');
```
### Send an Email
```php
$response = $yonoma->email->sendEmail([
    "from_email" => "updates@yonoma.io",
    "to_email" => "email@yourdomain.com",
    "subject" => "Welcome to Yonoma - You're In!",
    "mail_template" => "We're excited to welcome you to Yonoma! Your successful signup marks the beginning of what we hope will be an exceptional journey."
]);
```
## Lists
#### Create new list
```php
$response = $yonoma->lists->create([
  "list_name" => "New list"
]);
```
#### Get list of lists
```php
$response = $yonoma->lists->list();
```
#### Get one list
```php
$response = $yonoma->lists->retrieve('list id');
```
#### Update list
```php
$response = $yonoma->lists->update('list id',[
  "list_name" => "Updated list name"
]);
```
#### Delete list
```php
$response = $yonoma->lists->delete('list id');
```
## Tags
#### Create new tag
```php
$response = $yonoma->tags->create([
  "tag_name" => "New tag"
]);
```
#### Get list of tags
```php
$response = $yonoma->tags->list();
```
#### Get one tag
```php
$response = $yonoma->tags->retrieve('Tag id');
```
#### Update tag
```php
$response = $yonoma->tags->update('Tag id',[
  "tag_name" => "Updated tag name"
]);
```
#### Delete tag
```php
$response = $yonoma->tags->delete('Tag id');
```
## Contacts
#### Create new contact
```php
$response = $yonoma->contacts->create("list id", [
  "email" => "email@example.com",
  "status" => "Subscribed" | "Unsubscribed",
  "firstName" => "Contact", //optional
  "lastName" => "One", //optional
  "phone" => "1234567890", //optional
  "address" => "123, NY street", //optional
  "city" => "NY City", //optional
  "state" => "NY", //optional
  "country" => "US", //optional
  "zipcode" => "10001" //optional
]);
```
#### Update contact
```php
$response = $yonoma->contacts->update("list id", "Contact id", [
  "status" => "Subscribed" | "Unsubscribed",
]);
```
#### Add tag to contact
```php
$response = $yonoma->contacts->addTag("Contact id", [
  "tag_id" => "Tag id",
]);
```
#### Remove tag from contact
```php
$response = $yonoma->contacts->removeTag("Contact id", [
  "tag_id" => "Tag id",
]);
```
