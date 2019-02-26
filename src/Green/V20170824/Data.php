<?php
return [ 'product' => [ 'name' => 'Green', 'domain' => 'green.aliyuncs.com,green-share.aliyuncs.com,green.[RegionId].aliyuncs.com,green-vpc.[RegionId].aliyuncs.com,green-share.[RegionId].aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'Green', 'name' => '2017-08-24', 'apiStyle' => 'RPC', ], 'api' => [ 'MarkCdnImagePornData' => [ 'attributes' => [ 'version' => '2017-08-24', 'showJsonItemName' => 'true', 'name' => 'MarkCdnImagePornData', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Green', ], 'parameters' => [ 'Parameter' => [ 'Ids' => [ 'name' => 'ids', 'tagName' => 'Ids', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'MarkLabel' => [ 'name' => 'markLabel', 'tagName' => 'MarkLabel', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://green.cn-hangzhou.alibaba-inc.com/cdn/image/usermarking', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'GET', ], 'FlowControl' => [ 'userDefault' => '100', 'controlUnit' => 'Minute', 'special' => 'SpecialGreen20151228', ], 'name' => 'MarkCdnImagePornData', ], 'ExportCdnImagePornScanViolationData' => [ 'attributes' => [ 'version' => '2017-08-24', 'showJsonItemName' => 'true', 'name' => 'ExportCdnImagePornScanViolationData', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Green', ], 'parameters' => [ 'Parameter' => [ 'StartTime' => [ 'name' => 'startTime', 'tagName' => 'StartTime', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'EndTime' => [ 'name' => 'endTime', 'tagName' => 'EndTime', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'DomainNames' => [ 'name' => 'domainNames', 'tagName' => 'DomainNames', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://green.cn-hangzhou.alibaba-inc.com/cdn/image/exportdata', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'GET', ], 'FlowControl' => [ 'userDefault' => '100', 'controlUnit' => 'Minute', 'special' => 'SpecialGreen20151228', ], 'name' => 'ExportCdnImagePornScanViolationData', ], 'DescribeCdnImagePornStatData' => [ 'attributes' => [ 'version' => '2017-08-24', 'showJsonItemName' => 'true', 'name' => 'DescribeCdnImagePornStatData', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Green', ], 'parameters' => [ 'Parameter' => [ 'StartTime' => [ 'name' => 'startTime', 'tagName' => 'StartTime', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'EndTime' => [ 'name' => 'endTime', 'tagName' => 'EndTime', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'DomainNames' => [ 'name' => 'domainNames', 'tagName' => 'DomainNames', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://green.cn-hangzhou.alibaba-inc.com/cdn/image/statdata', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'GET', ], 'FlowControl' => [ 'userDefault' => '100', 'controlUnit' => 'Minute', 'special' => 'SpecialGreen20151228', ], 'name' => 'DescribeCdnImagePornStatData', ], 'DescribeCdnImagePornScanData' => [ 'attributes' => [ 'version' => '2017-08-24', 'showJsonItemName' => 'true', 'name' => 'DescribeCdnImagePornScanData', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Green', ], 'parameters' => [ 'Parameter' => [ 'StartTime' => [ 'name' => 'startTime', 'tagName' => 'StartTime', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'EndTime' => [ 'name' => 'endTime', 'tagName' => 'EndTime', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'true', ], 'DomainNames' => [ 'name' => 'domainNames', 'tagName' => 'DomainNames', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ScanLabel' => [ 'name' => 'scanLabel', 'tagName' => 'ScanLabel', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'MarkLabel' => [ 'name' => 'markLabel', 'tagName' => 'MarkLabel', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageNo' => [ 'name' => 'pageNo', 'tagName' => 'PageNo', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageSize' => [ 'name' => 'pageSize', 'tagName' => 'PageSize', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://green.cn-hangzhou.alibaba-inc.com/cdn/image/scandata', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'GET', ], 'FlowControl' => [ 'userDefault' => '100', 'controlUnit' => 'Minute', 'special' => 'SpecialGreen20151228', ], 'name' => 'DescribeCdnImagePornScanData', ], ],];