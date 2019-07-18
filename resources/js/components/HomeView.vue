<template>
    <div>
        <memo-list @memo-card-has-clicked="showDetailModal" ref="memoList"></memo-list>
        <memo-detail-modal ref="memoDetailModal"></memo-detail-modal>
    </div>
</template>
<script>
    import MemoList from "./MemoList";
    import MemoDetailModal from "./MemoDetailModal";
    export default {
        name: "HomeView",
        components: {MemoList, MemoDetailModal},
        methods: {
            showDetailModal: function ($event) {
                this.$refs.memoDetailModal.open($event);
            }
        }
    }
</script>
