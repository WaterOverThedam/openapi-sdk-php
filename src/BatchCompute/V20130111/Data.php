<?php
return [ 'product' => [ 'name' => 'BatchCompute', 'domain' => 'batchcompute.[RegionId].aliyuncs.com,batchcompute-vpc.[RegionId].aliyuncs.com,batchcompute-inner.[RegionId].aliyuncs.com,batchcompute-openapi-inner.[RegionId].aliyuncs.com,batchcompute-openapi-share.[RegionId].aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'BatchCompute', 'name' => '2013-01-11', 'apiStyle' => 'ROA', ], 'api' => [ 'ModifyJob' => [ 'attributes' => [ 'version' => '2013-01-11', 'name' => 'ModifyJob', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceName' => [ 'name' => 'ResourceName', 'tagName' => 'ResourceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Path', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '0', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/jobs/[ResourceName]', 'method' => 'PUT', ], 'FlowControl' => null, 'name' => 'ModifyJob', ], 'StopJob' => [ 'attributes' => [ 'version' => '2013-01-11', 'name' => 'StopJob', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceName' => [ 'name' => 'ResourceName', 'tagName' => 'ResourceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Path', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '0', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/jobs/[ResourceName]?Action=Stop', 'method' => 'PUT', ], 'FlowControl' => null, 'name' => 'StopJob', ], 'StartJob' => [ 'attributes' => [ 'version' => '2013-01-11', 'name' => 'StartJob', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceName' => [ 'name' => 'ResourceName', 'tagName' => 'ResourceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Path', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '0', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/jobs/[ResourceName]?Action=Start', 'method' => 'PUT', ], 'FlowControl' => null, 'name' => 'StartJob', ], 'ReleaseJob' => [ 'attributes' => [ 'version' => '2013-01-11', 'name' => 'ReleaseJob', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceName' => [ 'name' => 'ResourceName', 'tagName' => 'ResourceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Path', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '0', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/jobs/[ResourceName]', 'method' => 'DELETE', ], 'FlowControl' => null, 'name' => 'ReleaseJob', ], 'PutJob' => [ 'attributes' => [ 'version' => '2013-01-11', 'name' => 'PutJob', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceName' => [ 'name' => 'ResourceName', 'tagName' => 'ResourceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Path', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '0', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/jobs/[ResourceName]/Priority', 'method' => 'PUT', ], 'FlowControl' => null, 'name' => 'PutJob', ], 'PostJob' => [ 'attributes' => [ 'version' => '2013-01-11', 'name' => 'PostJob', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '0', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/jobs', 'method' => 'POST', ], 'FlowControl' => null, 'name' => 'PostJob', ], 'ListSnapshots' => [ 'attributes' => [ 'version' => '2013-01-11', 'name' => 'ListSnapshots', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '0', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/snapshots', 'method' => 'GET', ], 'FlowControl' => null, 'name' => 'ListSnapshots', ], 'ListJobs' => [ 'attributes' => [ 'version' => '2013-01-11', 'name' => 'ListJobs', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '0', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/jobs', 'method' => 'GET', ], 'FlowControl' => null, 'name' => 'ListJobs', ], 'ListImages' => [ 'attributes' => [ 'version' => '2013-01-11', 'name' => 'ListImages', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '0', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/images', 'method' => 'GET', ], 'FlowControl' => null, 'name' => 'ListImages', ], 'GetTasks' => [ 'attributes' => [ 'version' => '2013-01-11', 'name' => 'GetTasks', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceName' => [ 'name' => 'ResourceName', 'tagName' => 'ResourceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Path', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '0', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/jobs/[ResourceName]/tasks', 'method' => 'GET', ], 'FlowControl' => null, 'name' => 'GetTasks', ], 'GetSnapshot' => [ 'attributes' => [ 'version' => '2013-01-11', 'name' => 'GetSnapshot', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceName' => [ 'name' => 'ResourceName', 'tagName' => 'ResourceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Path', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '0', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/snapshots/[ResourceName]', 'method' => 'GET', ], 'FlowControl' => null, 'name' => 'GetSnapshot', ], 'GetJobDescription' => [ 'attributes' => [ 'version' => '2013-01-11', 'showJsonItemName' => 'true', 'name' => 'GetJobDescription', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceName' => [ 'name' => 'ResourceName', 'tagName' => 'ResourceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Path', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '1', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/jobs/[ResourceName]/description', 'method' => 'GET', ], 'FlowControl' => null, 'name' => 'GetJobDescription', ], 'GetJob' => [ 'attributes' => [ 'version' => '2013-01-11', 'name' => 'GetJob', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceName' => [ 'name' => 'ResourceName', 'tagName' => 'ResourceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Path', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '0', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/jobs/[ResourceName]', 'method' => 'GET', ], 'FlowControl' => null, 'name' => 'GetJob', ], 'GetImage' => [ 'attributes' => [ 'version' => '2013-01-11', 'name' => 'GetImage', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceName' => [ 'name' => 'ResourceName', 'tagName' => 'ResourceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Path', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '0', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/images/[ResourceName]', 'method' => 'GET', ], 'FlowControl' => null, 'name' => 'GetImage', ], 'DeleteSnapshot' => [ 'attributes' => [ 'version' => '2013-01-11', 'name' => 'DeleteSnapshot', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceName' => [ 'name' => 'ResourceName', 'tagName' => 'ResourceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Path', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '0', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/snapshots/[ResourceName]', 'method' => 'DELETE', ], 'FlowControl' => null, 'name' => 'DeleteSnapshot', ], 'DeleteJob' => [ 'attributes' => [ 'version' => '2013-01-11', 'name' => 'DeleteJob', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceName' => [ 'name' => 'ResourceName', 'tagName' => 'ResourceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Path', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '0', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/jobs/[ResourceName]', 'method' => 'DELETE', ], 'FlowControl' => null, 'name' => 'DeleteJob', ], 'DeleteImage' => [ 'attributes' => [ 'version' => '2013-01-11', 'name' => 'DeleteImage', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'BatchCompute', ], 'parameters' => [ 'Parameter' => [ 'ResourceName' => [ 'name' => 'ResourceName', 'tagName' => 'ResourceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Path', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'String', 'httpHost' => 'http://cn-qingdao.diku-stg.aliyuncs.com', 'timeout' => '0', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/images/[ResourceName]', 'method' => 'DELETE', ], 'FlowControl' => null, 'name' => 'DeleteImage', ], ],];