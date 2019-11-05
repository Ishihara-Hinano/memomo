<template>
    <div>
        <div class="card-columns">
            <memo-card v-for="memo in memos"
            :memo="memo"
            @memo-card-has-clicked="$emit('memo-card-has-clicked', $event)"
            @memo-should-be-edit="showEditModal"
            :key="memo.id"></memo-card>
        </div>
        <edit-memo-modal ref="editMemoModal" @memo-has-updated="loadData"></edit-memo-modal>
        <pagination></pagination>
    </div>
</template>
<script>
    import MemoCard from "./MemoCard";
    import EditMemoModal from "./EditMemoModal";
    import Pagination from "./Pagination";
    export default {
        name: "MemoList",
        components: {EditMemoModal, MemoCard, Pagination},
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
            },
            showEditModal: function ($event) {
                this.$refs.editMemoModal.open($event);
            }

        }
    }
</script>
