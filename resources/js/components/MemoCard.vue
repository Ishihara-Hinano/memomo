<template>
    <div class="card" @click="$emit('memo-card-has-clicked', memo)">
        <img v-if="memo.attributes.image_path" :src="memo.attributes.image_path" class="card-img-top" :alt="memo.attributes.title">
        <div class="card-body">
            <h5 class="card-title">{{ memo.attributes.title }}</h5>
            <p class="card-text">{{ truncate(memo.attributes.content, 300) }}</p>
            <p class="card-text"><small class="text-muted">Last updated {{ memo.attributes.updated_at_for_human }}</small></p>
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
