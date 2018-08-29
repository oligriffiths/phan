<?php // phpcs:ignoreFile

/**
 * This contains the information needed to convert the function signatures for php 7.2 to php 7.1 (and vice versa)
 *
 * This has two sections.
 * The 'new' section contains function/method names from FunctionSignatureMap (And alternates, if applicable) that do not exist in php7.1 or have different signatures in php 7.2.
 *   If they were just updated, the function/method will be present in the 'added' signatures.
 * The 'old' signatures contains the signatures that are different in php 7.1.
 *   Functions are expected to be removed only in major releases of php. (e.g. php 7.0 removed various functions that were deprecated in 5.6)
 *
 * @see FunctionSignatureMap.php
 *
 * @phan-file-suppress PhanPluginMixedKeyNoKey (read by Phan when analyzing this file)
 */
return [
'new' => [
    'DOMNodeList::count' => ['int'],
    'ftp_append' => ['bool', 'ftp'=>'resource', 'remote_file'=>'string', 'local_file'=>'string', 'mode='=>'int'],
    'hash_copy' => ['HashContext', 'context'=>'HashContext'],
    'hash_final' => ['string', 'context'=>'HashContext', 'raw_output='=>'bool'],
    'hash_hmac_algos' => ['array<int,string>'],
    'hash_init' => ['HashContext', 'algo'=>'string', 'options='=>'int', 'key='=>'string'],
    'hash_update' => ['bool', 'context'=>'HashContext', 'data'=>'string'],
    'hash_update_file' => ['bool', 'context='=>'HashContext', 'filename'=>'string', 'scontext='=>'?HashContext'],
    'hash_update_stream' => ['int', 'context'=>'HashContext', 'handle'=>'', 'length='=>'int'],
    'imagebmp' => ['bool', 'image'=>'resource', 'to='=>'mixed', 'compressed='=>'bool'],
    'imagecreatefrombmp' => ['resource', 'filename'=>'string'],
    'imageopenpolygon' => ['bool', 'image'=>'resource', 'points'=>'array', 'num_points'=>'int', 'color'=>'int'],
    'imageresolution' => ['mixed', 'image'=>'resource', 'res_x='=>'int', 'res_y='=>'int'],
    'imagesetclip' => ['bool', 'im'=>'resource', 'x1'=>'int', 'y1'=>'int', 'x2'=>'int', 'y2'=>'int'],
    'ldap_exop' => ['mixed', 'link'=>'resource', 'reqoid'=>'string', 'reqdata='=>'string', 'servercontrols='=>'array', 'retdata='=>'string', 'retoid='=>'string'],
    'ldap_exop_passwd' => ['mixed', 'link'=>'resource', 'user='=>'string', 'oldpw='=>'string', 'newpw='=>'string', 'serverctrls='=>'array'],
    'ldap_exop_refresh' => ['int', 'link'=>'resource', 'dn'=>'string', 'ttl'=>'int'],
    'ldap_exop_whoami' => ['string', 'link'=>'resource'],
    'ldap_parse_exop' => ['bool', 'link'=>'resource', 'result'=>'resource', 'retdata='=>'string', 'retoid='=>'string'],
    'mb_chr' => ['string', 'cp'=>'int', 'encoding='=>'string'],
    'mb_ord' => ['int', 'str'=>'string', 'enc='=>'string'],
    'mb_scrub' => ['string', 'str'=>'string', 'enc='=>'string'],
    'oci_register_taf_callback' => ['bool', 'connection'=>'resource', 'callback='=>'callable'],
    'oci_unregister_taf_callback' => ['bool', 'connection'=>'resource'],
    'ReflectionClass::isIterable' => ['bool'],
    'SQLite3::openBlob' => ['resource', 'table'=>'string', 'column'=>'string', 'rowid'=>'int', 'dbname'=>'string', 'flags='=>'int'],
    'sapi_windows_vt100_support' => ['bool', 'stream'=>'resource', 'enable='=>'bool'],
    'socket_addrinfo_bind' => ['resource', 'addrinfo'=>'resource'],
    'socket_addrinfo_connect' => ['resource', 'addrinfo'=>'resource'],
    'socket_addrinfo_explain' => ['array', 'addrinfo'=>'resource'],
    'socket_addrinfo_lookup' => ['resource[]', 'node'=>'string', 'service='=>'mixed', 'hints='=>'array'],
    'sodium_add' => ['string', 'string_1'=>'string', 'string_2'=>'string'],
    'sodium_base642bin' => ['string', 'base64'=>'string', 'variant'=>'int', 'ignore'=>'string'],
    'sodium_bin2base64' => ['string', 'binary'=>'string', 'variant'=>'int'],
    'sodium_bin2hex' => ['string', 'binary'=>'string'],
    'sodium_compare' => ['int', 'string_1'=>'string', 'string_2'=>'string'],
    'sodium_crypto_aead_aes256gcm_decrypt' => ['string|false', 'confidential_message'=>'string', 'public_message'=>'string', 'nonce'=>'string', 'key'=>'string'],
    'sodium_crypto_aead_aes256gcm_encrypt' => ['string', 'confidential_message'=>'string', 'public_message'=>'string', 'nonce'=>'string', 'key'=>'string'],
    'sodium_crypto_aead_aes256gcm_is_available' => ['bool'],
    'sodium_crypto_aead_aes256gcm_keygen' => ['string'],
    'sodium_crypto_aead_chacha20poly1305_decrypt' => ['string', 'confidential_message'=>'string', 'public_message'=>'string', 'nonce'=>'string', 'key'=>'string'],
    'sodium_crypto_aead_chacha20poly1305_encrypt' => ['string', 'confidential_message'=>'string', 'public_message'=>'string', 'nonce'=>'string', 'key'=>'string'],
    'sodium_crypto_aead_chacha20poly1305_ietf_decrypt' => ['string|false', 'confidential_message'=>'string', 'public_message'=>'string', 'nonce'=>'string', 'key'=>'string'],
    'sodium_crypto_aead_chacha20poly1305_ietf_encrypt' => ['string', 'confidential_message'=>'string', 'public_message'=>'string', 'nonce'=>'string', 'key'=>'string'],
    'sodium_crypto_aead_chacha20poly1305_ietf_keygen' => ['string'],
    'sodium_crypto_aead_chacha20poly1305_keygen' => ['string'],
    'sodium_crypto_aead_xchacha20poly1305_ietf_decrypt' => ['string|false', 'confidential_message'=>'string', 'public_message'=>'string', 'nonce'=>'string', 'key'=>'string'],
    'sodium_crypto_aead_xchacha20poly1305_ietf_encrypt' => ['string', 'confidential_message'=>'string', 'public_message'=>'string', 'nonce'=>'string', 'key'=>'string'],
    'sodium_crypto_aead_xchacha20poly1305_ietf_keygen' => ['string'],
    'sodium_crypto_auth' => ['string', 'message'=>'string', 'key'=>'string'],
    'sodium_crypto_auth_keygen' => ['string'],
    'sodium_crypto_auth_verify' => ['bool', 'mac'=>'string', 'message'=>'string', 'key'=>'string'],
    'sodium_crypto_box' => ['string', 'string'=>'string', 'nonce'=>'string', 'key'=>'string'],
    'sodium_crypto_box_keypair' => ['string'],
    'sodium_crypto_box_keypair_from_secretkey_and_publickey' => ['string', 'secret_key'=>'string', 'public_key'=>'string'],
    'sodium_crypto_box_open' => ['string|false', 'message'=>'string', 'nonce'=>'string', 'message_keypair'=>'string'],
    'sodium_crypto_box_publickey' => ['string', 'keypair'=>'string'],
    'sodium_crypto_box_publickey_from_secretkey' => ['string', 'secretkey'=>'string'],
    'sodium_crypto_box_seal' => ['string', 'message'=>'string', 'publickey'=>'string'],
    'sodium_crypto_box_seal_open' => ['string|false', 'message'=>'string', 'recipient_keypair'=>'string'],
    'sodium_crypto_box_secretkey' => ['string', 'keypair'=>'string'],
    'sodium_crypto_box_seed_keypair' => ['string', 'seed'=>'string'],
    'sodium_crypto_generichash' => ['string', 'msg'=>'string', 'key='=>'?string', 'length='=>'?int'],
    'sodium_crypto_generichash_final' => ['string', 'state'=>'string', 'length='=>'?int'],
    'sodium_crypto_generichash_init' => ['string', 'key='=>'?string', 'length='=>'?int'],
    'sodium_crypto_generichash_keygen' => ['string'],
    'sodium_crypto_generichash_update' => ['bool', 'state'=>'string', 'string'=>'string'],
    'sodium_crypto_kdf_derive_from_key' => ['string', 'subkey_len'=>'int', 'subkey_id'=>'int', 'context'=>'string', 'key'=>'string'],
    'sodium_crypto_kdf_keygen' => ['string'],
    'sodium_crypto_kx_client_session_keys' => ['string', 'client_keypair'=>'string', 'server_key'=>'string'],
    'sodium_crypto_kx_keypair' => ['string'],
    'sodium_crypto_kx_publickey' => ['string', 'keypair'=>'string'],
    'sodium_crypto_kx_secretkey' => ['string', 'keypair'=>'string'],
    'sodium_crypto_kx_seed_keypair' => ['string', 'seed'=>'string'],
    'sodium_crypto_kx_server_session_keys' => ['string', 'server_keypair'=>'string', 'client_key'=>'string'],
    'sodium_crypto_pwhash' => ['string', 'length'=>'int', 'password'=>'string', 'salt'=>'string', 'opslimit'=>'int', 'memlimit'=>'int', 'alg='=>'int'],
    'sodium_crypto_pwhash_scryptsalsa208sha256' => ['string', 'length'=>'int', 'password'=>'string', 'salt'=>'string', 'opslimit'=>'int', 'memlimit'=>'int'],
    'sodium_crypto_pwhash_scryptsalsa208sha256_str' => ['string', 'password'=>'string', 'opslimit'=>'int', 'memlimit'=>'int'],
    'sodium_crypto_pwhash_scryptsalsa208sha256_str_verify' => ['bool', 'hash'=>'string', 'password'=>'string'],
    'sodium_crypto_pwhash_str' => ['string', 'password'=>'string', 'opslimit'=>'int', 'memlimit'=>'int'],
    'sodium_crypto_pwhash_str_needs_rehash' => ['bool', 'password'=>'string', 'opslimit'=>'int', 'memlimit'=>'int'],
    'sodium_crypto_pwhash_str_verify' => ['bool', 'hash'=>'string', 'password'=>'string'],
    'sodium_crypto_scalarmult' => ['string', 'string_1'=>'string', 'string_2'=>'string'],
    'sodium_crypto_scalarmult_base' => ['string', 'string_1'=>'string', 'string_2'=>'string'],
    'sodium_crypto_secretbox' => ['string', 'plaintext'=>'string', 'nonce'=>'string', 'key'=>'string'],
    'sodium_crypto_secretbox_keygen' => ['string'],
    'sodium_crypto_secretbox_open' => ['string|false', 'ciphertext'=>'string', 'nonce'=>'string', 'key'=>'string'],
    'sodium_crypto_secretstream_xchacha20poly1305_init_pull' => ['string', 'header'=>'string', 'key'=>'string'],
    'sodium_crypto_secretstream_xchacha20poly1305_init_push' => ['array', 'key'=>'string'],
    'sodium_crypto_secretstream_xchacha20poly1305_keygen' => ['string'],
    'sodium_crypto_secretstream_xchacha20poly1305_pull' => ['array', 'state'=>'string', 'c'=>'string', 'ad='=>'string'],
    'sodium_crypto_secretstream_xchacha20poly1305_push' => ['string', 'state'=>'string', 'msg'=>'string', 'ad='=>'string', 'tag='=>'int'],
    'sodium_crypto_secretstream_xchacha20poly1305_rekey' => ['void', 'state'=>'string'],
    'sodium_crypto_shorthash' => ['string', 'message'=>'string', 'key'=>'string'],
    'sodium_crypto_shorthash_keygen' => ['string'],
    'sodium_crypto_sign' => ['string', 'message'=>'string', 'secretkey'=>'string'],
    'sodium_crypto_sign_detached' => ['string', 'message'=>'string', 'secretkey'=>'string'],
    'sodium_crypto_sign_ed25519_pk_to_curve25519' => ['string', 'ed25519pk'=>'string'],
    'sodium_crypto_sign_ed25519_sk_to_curve25519' => ['string', 'ed25519sk'=>'string'],
    'sodium_crypto_sign_keypair' => ['string'],
    'sodium_crypto_sign_keypair_from_secretkey_and_publickey' => ['string', 'secret_key'=>'string', 'public_key'=>'string'],
    'sodium_crypto_sign_open' => ['string|false', 'message'=>'string', 'publickey'=>'string'],
    'sodium_crypto_sign_publickey' => ['string', 'keypair'=>'string'],
    'sodium_crypto_sign_publickey_from_secretkey' => ['string', 'secretkey'=>'string'],
    'sodium_crypto_sign_secretkey' => ['string', 'keypair'=>'string'],
    'sodium_crypto_sign_seed_keypair' => ['string', 'seed'=>'string'],
    'sodium_crypto_sign_verify_detached' => ['bool', 'signature'=>'string', 'message'=>'string', 'publickey'=>'string'],
    'sodium_crypto_stream' => ['string', 'length'=>'int', 'nonce'=>'string', 'key'=>'string'],
    'sodium_crypto_stream_keygen' => ['string'],
    'sodium_crypto_stream_xor' => ['string', 'message'=>'string', 'nonce'=>'string', 'key'=>'string'],
    'sodium_hex2bin' => ['string', 'hex'=>'string', 'ignore='=>'string'],
    'sodium_increment' => ['string', '&binary_string'=>'string'],
    'sodium_memcmp' => ['int', 'string_1'=>'string', 'string_2'=>'string'],
    'sodium_memzero' => ['void', '&secret'=>'string'],
    'sodium_pad' => ['string', 'unpadded'=>'string', 'length'=>'int'],
    'sodium_unpad' => ['string', 'padded'=>'string', 'length'=>'int'],
    'stream_isatty' => ['bool', 'stream'=>'resource'],
    'ZipArchive::count' => ['int'],
    'ZipArchive::setEncryptionIndex' => ['bool', 'index'=>'int', 'method'=>'string', 'password='=>'string'],
    'ZipArchive::setEncryptionName' => ['bool', 'name'=>'string', 'method'=>'int', 'password='=>'string'],
],
'old' => [
    'hash_copy' => ['resource', 'context'=>'resource'],
    'hash_final' => ['string', 'context'=>'resource', 'raw_output='=>'bool'],
    'hash_hkdf' => ['string', 'algo'=>'string', 'ikm'=>'string', 'length='=>'int', 'info='=>'string', 'salt='=>'string'],
    'hash_init' => ['resource', 'algo'=>'string', 'options='=>'int', 'key='=>'string'],
    'hash_pbkdf2' => ['string', 'algo'=>'string', 'password'=>'string', 'salt'=>'string', 'iterations'=>'int', 'length='=>'int', 'raw_output='=>'bool'],
    'hash_update' => ['bool', 'context'=>'resource', 'data'=>'string'],
    'hash_update_file' => ['bool', 'hcontext'=>'resource', 'filename'=>'string', 'scontext='=>'?resource'],
    'hash_update_stream' => ['int', 'context'=>'resource', 'handle'=>'resource', 'length='=>'int'],
    'SQLite3::openBlob' => ['resource', 'table'=>'string', 'column'=>'string', 'rowid'=>'int', 'dbname'=>'string'],
]
];
