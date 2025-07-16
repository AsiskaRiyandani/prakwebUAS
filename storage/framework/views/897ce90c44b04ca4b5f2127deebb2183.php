

<?php $__env->startSection('content'); ?>
    <h1>Data Kegiatan Organisasi</h1>

    <a href="<?php echo e(route('kegiatan.create')); ?>">Tambah Kegiatan</a>

    <form action="<?php echo e(route('kegiatan.index')); ?>" method="GET" style="margin-top: 15px; margin-bottom: 15px;">
        <input type="text" name="search" placeholder="Cari nama kegiatan..." value="<?php echo e(request('search')); ?>">
        <button type="submit">Cari</button>
    </form>

    <table border="1" >
        <tr>
            <th>ID</th>
            <th>Nama Organisasi</th>
            <th>Nama Kegiatan</th>
            <th>Tanggal</th>
            <th>Lokasi</th>
            <th>Deskripsi</th> 
            <th>Aksi</th>
        </tr>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->organisasi->nama_organisasi); ?></td>
                <td><?php echo e($item->nama_kegiatan); ?></td>
                <td><?php echo e($item->tanggal_kegiatan); ?></td>
                <td><?php echo e($item->lokasi); ?></td>
                <td><?php echo e($item->deskripsi); ?></td> 
                <td>
                    <a href="<?php echo e(route('kegiatan.edit', $item->id)); ?>">Edit</a>
                    <form action="<?php echo e(route('kegiatan.destroy', $item->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Semester 4\PraktikumPemWeb\231110155_UAS\manajemen-organisasi-mahasiswa\resources\views/kegiatan/index.blade.php ENDPATH**/ ?>