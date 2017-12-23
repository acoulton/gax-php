<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/v1/policy.proto

namespace Google\Cloud\Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The difference delta between two policies.
 *
 * Generated from protobuf message <code>google.iam.v1.PolicyDelta</code>
 */
class PolicyDelta extends \Google\Protobuf\Internal\Message
{
    /**
     * The delta for Bindings between two policies.
     *
     * Generated from protobuf field <code>repeated .google.iam.v1.BindingDelta binding_deltas = 1;</code>
     */
    private $binding_deltas;

    public function __construct() {
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        parent::__construct();
    }

    /**
     * The delta for Bindings between two policies.
     *
     * Generated from protobuf field <code>repeated .google.iam.v1.BindingDelta binding_deltas = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBindingDeltas()
    {
        return $this->binding_deltas;
    }

    /**
     * The delta for Bindings between two policies.
     *
     * Generated from protobuf field <code>repeated .google.iam.v1.BindingDelta binding_deltas = 1;</code>
     * @param \Google\Cloud\Iam\V1\BindingDelta[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBindingDeltas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Iam\V1\BindingDelta::class);
        $this->binding_deltas = $arr;

        return $this;
    }

}
