<?php
class Errors {
	const E_SUCCESS = "E_SUCCESS";
	const E_UNAUTHORIZED = "E_UNAUTHORIZED";
	const E_UNKNOWN_METHOD = "E_UNKNOWN_METHOD";
	const E_UNKNOWN_PLUGIN = "E_UNKNOWN_PLUGIN";
	const E_SCHEMA_MISMATCH = "E_SCHEMA_MISMATCH";

	static function to_json(string $code) {
		return json_encode(["error" => ["code" => $code]]);
	}
}
