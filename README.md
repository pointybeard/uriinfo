# URI Info

- Version: v1.0.0
- Date: Oct 08 2018
- [Release notes](https://github.com/pointybeard/uriinfo/blob/master/CHANGELOG.md)
- [GitHub repository](https://github.com/pointybeard/uriinfo)

[![Latest Stable Version](https://poser.pugx.org/pointybeard/uriinfo/version)](https://packagist.org/packages/pointybeard/uriinfo) [![License](https://poser.pugx.org/pointybeard/uriinfo/license)](https://packagist.org/packages/pointybeard/uriinfo)

Helper class for probing a URL with cURL and returning information about it.

## Installation

URIInfo is installed via [Composer](http://getcomposer.org/). To install, use `composer require pointybeard/uriinfo` or add `"pointybeard/uriinfo": "~1.0"` to your `composer.json` file.

# Usage Example

Here is a quick and dirty example of how to use this group of classes

```<?php

include "vendor/autoload.php";

use pointybeard\URIInfo\Lib;

$info = (new Lib\URIInfo("https://example.com"))->run();

## Check the HTTP Status code
var_dump($info->http_code);

```

# Available Properties

This class uses cURL to probe the URL supplied. The properties available match those available from a call to `curl_exec()`. Specifically these are:

    url, content_type, http_code, header_size, request_size, filetime, ssl_verify_result, redirect_count, total_time, namelookup_time, connect_time, pretransfer_time, size_upload, size_download, speed_download, speed_upload, download_content_length, upload_content_length, starttransfer_time, redirect_time, certinfo, primary_ip, primary_port, local_ip, local_port, redirect_url, request_header

See the [curl_exec() method in the PHP Manual](http://php.net/manual/en/function.curl-getinfo.php#refsect1-function.curl-getinfo-returnvalues) for more information

## Support

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/pointybeard/uriinfo/issues),
or better yet, fork the library and submit a pull request.

## Contributing

We encourage you to contribute to this project. Please check out the [Contributing documentation](https://github.com/pointybeard/uriinfo/blob/master/CONTRIBUTING.md) for guidelines about how to get involved.

## License

"URIInfo" is released under the [MIT License](http://www.opensource.org/licenses/MIT).
