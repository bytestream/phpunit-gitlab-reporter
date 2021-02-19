# PHPUnit GitLab Reporter

A JUnit reporter plugin for PHPUnit which is compatible with GitLab.

## Usage

```xml
<listeners>
    <listener class="SupportPal\PHPUnitGitLabReporter\Reporter" file="vendor/supportpal/phpunit-gitlab-reporter/src/Reporter.php">
        <arguments>
            <string>report.xml</string>
        </arguments>
    </listener>
</listeners>
```

## Schema

https://github.com/windyroad/JUnit-Schema/blob/master/JUnit.xsd