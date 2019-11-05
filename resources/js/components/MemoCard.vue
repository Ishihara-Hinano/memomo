<template>
    <div class="card">
        <img @click="$emit('memo-card-has-clicked', memo)" v-if="memo.attributes.image_url" :src="memo.attributes.image_url" class="card-img-top" :alt="memo.attributes.title">
        <div class="card-body">
            <h5 class="card-title" @click="$emit('memo-card-has-clicked', memo)">{{ memo.attributes.title }}</h5>
            <p class="card-text" @click="$emit('memo-card-has-clicked', memo)">{{ truncate(memo.attributes.content, 300) }}</p>
            <div class="d-flex justify-content-between">
                <p class="card-text">
                    <small class="text-muted">Last updated {{ memo.attributes.updated_at_for_human }}</small>
                </p>
                <button class="btn btn-link" @click="$emit('memo-should-be-edit', memo)">
                    <icon icon="cog"></icon>
                </button>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: "MemoCard",
        props: ['memo'],
        methods: {
            truncate: function (str, len) {
                return str.length <= len ? str: (str.substr(0, len)+"...");
            }
        },
    }
</script>
