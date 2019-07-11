<template>
<div class="modal fade" id="memoDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content" v-if="memo">
            <div class="modal-header">
                <h5 class="modal-title">{{ memo.attributes.title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-secondary">Last updated {{ memo.attributes.updated_at_for_human }}</p>
                {{ memo.attributes.content }}
            </div>
            <div class="modal-footer d-frex justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</template>
<script>
    export default {
        name: "MemoDetailModal",
        data: function () {
            return {
                memo: null,

            }
        },
        methods: {
            open: function (memo) {
                this.memo = memo;
                $('#memoDetailModal').modal('show');
            },

        }
    }
</script>
