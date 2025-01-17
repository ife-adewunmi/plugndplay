<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

return [
    // No login required to use

    // Public mode account
    'publicAccount' => [
        'api.global.configs',
        'api.global.code.messages',
        'api.global.channels',
        'api.global.roles',
        'api.global.content.types',
        'api.global.stickers',
        'api.global.block.words',
        'api.common.ip.info',
        'api.common.input.tips',
        'api.common.callback',
        'api.common.send.verify.code',
        'api.common.upload.log',
        'api.common.file.users',
        'api.search.users',
        'api.search.groups',
        'api.search.hashtags',
        'api.search.posts',
        'api.search.comments',
        'api.account.register',
        'api.account.login',
        'api.account.reset.password',
        'api.user.list',
        'api.user.detail',
        'api.user.followers.you.follow',
        'api.user.interaction',
        'api.user.mark.list',
        'api.group.tree',
        'api.group.categories',
        'api.group.list',
        'api.group.detail',
        'api.group.interaction',
        'api.hashtag.list',
        'api.hashtag.detail',
        'api.hashtag.interaction',
        'api.post.list',
        'api.post.detail',
        'api.post.interaction',
        'api.post.users',
        'api.post.quotes',
        'api.post.logs',
        'api.post.log.detail',
        'api.post.nearby',
        'api.comment.list',
        'api.comment.detail',
        'api.comment.interaction',
        'api.comment.logs',
        'api.comment.log.detail',
    ],

    // Public mode user
    'publicUser' => [
        'api.global.configs',
        'api.global.code.messages',
        'api.global.channels',
        'api.global.roles',
        'api.global.content.types',
        'api.global.stickers',
        'api.global.block.words',
        'api.common.ip.info',
        'api.common.input.tips',
        'api.common.callback',
        'api.common.send.verify.code',
        'api.common.upload.log',
        'api.common.file.users',
        'api.search.users',
        'api.search.groups',
        'api.search.hashtags',
        'api.search.posts',
        'api.search.comments',
        'api.account.register',
        'api.account.login',
        'api.account.reset.password',
        'api.account.detail',
        'api.account.wallet.logs',
        'api.account.verify.identity',
        'api.account.edit',
        'api.account.logout',
        'api.account.apply.delete',
        'api.account.revoke.delete',
        'api.user.list',
        'api.user.detail',
        'api.user.followers.you.follow',
        'api.user.interaction',
        'api.user.mark.list',
        'api.user.auth',
        'api.user.panel',
        'api.group.tree',
        'api.group.categories',
        'api.group.list',
        'api.group.detail',
        'api.group.interaction',
        'api.hashtag.list',
        'api.hashtag.detail',
        'api.hashtag.interaction',
        'api.post.list',
        'api.post.detail',
        'api.post.interaction',
        'api.post.users',
        'api.post.quotes',
        'api.post.logs',
        'api.post.log.detail',
        'api.post.nearby',
        'api.comment.list',
        'api.comment.detail',
        'api.comment.interaction',
        'api.comment.logs',
        'api.comment.log.detail',
    ],

    // Private mode account
    'privateAccount' => [
        'api.global.configs',
        'api.global.code.messages',
        'api.global.channels',
        'api.common.ip.info',
        'api.common.callback',
        'api.common.send.verify.code',
        'api.common.upload.log',
        'api.account.login',
        'api.account.reset.password',
    ],

    // Private mode user
    'privateUser' => [
        'api.global.configs',
        'api.global.code.messages',
        'api.global.channels',
        'api.common.ip.info',
        'api.common.callback',
        'api.common.send.verify.code',
        'api.common.upload.log',
        'api.account.login',
        'api.account.reset.password',
        'api.account.detail',
        'api.account.wallet.logs',
        'api.account.verify.identity',
        'api.account.edit',
        'api.account.logout',
        'api.account.apply.delete',
        'api.account.revoke.delete',
        'api.user.auth',
        'api.user.panel',
    ],
];
