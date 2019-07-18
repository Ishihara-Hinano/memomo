<template>
    <div class="card-columns">
        <memo-card v-for="memo in memos"
        :memo="memo"
        @memo-card-has-clicked="$emit('memo-card-has-clicked', $event)"
        :key="memo.id"></memo-card>
    </div>
</template>
<script>
    import MemoCard from "./MemoCard";
    export default {
        name: "MemoList",
        components: {MemoCard},
        data: function() {
            return {
                memos: [],
            }
        },
        created: function() {
            this.loadData();
        },
        methods: {
            loadData: function () {
                axios.get('/api/v1/memos')
                .then((response) => {
                    this.memos = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                });
            },
            push: function (memo) {
                this.memos.unshift(memo);
            }

        }
    }
</script>
